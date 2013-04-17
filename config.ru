# This file is used by Rack-based servers to start the application.
# Adding a comment so that I can hopefully merge development and Rails

require ::File.expand_path('../config/environment',  __FILE__)
run Harbingernews::Application
