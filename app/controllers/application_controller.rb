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

  rescue_from ActionController::RoutingError, with: :render_404_page

  protected
    def render_404_page
      render "error_pages/application/some_generic_404.html.erb", status: 404
    end



end


