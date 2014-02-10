# Load the rails application
require File.expand_path('../application', __FILE__)

# Initialize the rails application
Harbingernews::Application.initialize!


require 'parse-ruby-client'

Parse.init :application_id => "C9vun7KPxdDKBsVcuzwxlyRDEC83hekR9O6yeX3e",
           :api_key        => "VyFpy4uidisma9qkCYc0AFvVR8s15g7Iz1SgDUPw"