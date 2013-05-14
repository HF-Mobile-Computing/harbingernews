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

  rescue_from ActiveRecord::RecordNotFound do |exception|
    render "error_pages/users/404.html.erb", status: 404, locals: { exception: exception }
  end


end


