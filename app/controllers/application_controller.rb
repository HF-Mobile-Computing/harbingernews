class ApplicationController < ActionController::Base
  protect_from_forgery

  ## keep user on same page after successful sign in or sign out
  def after_sign_out_path_for(resource_or_scope)
  	request.referrer
  end

  # Save me, cheesus!
  rescue_from CanCan::AccessDenied do |exception|
    redirect_to root_url, :alert => exception.message
  end

end
