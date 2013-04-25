class HomeController < ApplicationController
  
  def index
    @memos = Memo.limit(12).reverse_order
    @announcement = Announcement.last
  end

end
