class ApplicationController < ActionController::Base
  protect_from_forgery
  root_path = "/"

  ## keep user on same page after successful sign in or sign out
  def after_sign_out_path_for(resource_or_scope)
  	request.referrer
  end

  # Save me, cheesus!
  rescue_from CanCan::AccessDenied do |exception|
    redirect_to '/', alert: exception.message
  end
  
  unless Rails.application.config.consider_all_requests_local
    rescue_from Exception, with: lambda { |exception| render_error 500, exception }
    rescue_from ActionController::RoutingError, ActionController::UnknownController, ::AbstractController::ActionNotFound, ActiveRecord::RecordNotFound, with: lambda { |exception| render_error 404, exception }
  end
  
  # Override methods used by Active Admin
  def authenticate_admin_user!
    if signed_in?
      unless current_user.admin?
        flash[:alert] = "This area is restricted to administrators only."
        redirect_to root_path
      end
    else
      flash[:alert] = "You must be logged in as an administator to visit this area."
      redirect_to root_path
    end
  end
  
  def current_admin_user
    return nil if user_signed_in? && !current_user.admin?
    current_user
  end

  private
  def render_error(status, exception)
    respond_to do |format|
      format.html { render template: "errors/error_#{status}", layout: 'layouts/application', status: status }
      format.all { render nothing: true, status: status }
    end
  end
end


