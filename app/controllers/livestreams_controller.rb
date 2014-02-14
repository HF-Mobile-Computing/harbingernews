class LivestreamsController < ApplicationController
  def index
  	@current_stream = Stream.last
  	@all_streams = Stream.all
  end
end
