require_relative '../spec_helper'

describe "Static Pages" do

  describle "About page" do
  
    it "should habe the content 'Sample app'" do
  
      visit '/static_pages/home'
      page.should have_content('Sample app')
    
    end
  
  end

end