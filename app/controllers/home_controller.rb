class HomeController < ApplicationController
  
  before_filter :set_vars
  
  def index
    render layout: false
  end
  
  protected
    
    def set_vars
      @memos = Memo.limit(12).reverse_order
      @announcement = Announcement.last
      @hello = "hello"
    end
end
