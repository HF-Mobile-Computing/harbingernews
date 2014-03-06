class HomeController < ApplicationController
  
  
  def index
    @memos = Memo.limit(12).reverse_order
    @announcement = Announcement.last
    @recent = RecentEvent.last
    @upcoming = UpcomingEvent.last
    @slide1 = Slide1.last
    @slide2 = Slide2.last
    @day = Day.last
    respond_to do |format|
	       format.json 
	       format.html
	end
  end
end
