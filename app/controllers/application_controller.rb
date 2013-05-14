class ApplicationController < ActionController::Base
  protect_from_forgery

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

  private
  def render_error(status, exception)
    respond_to do |format|
      format.html { render template: "errors/error_#{status}", layout: 'layouts/application', status: status }
      format.all { render nothing: true, status: status }
    end
  end
end


