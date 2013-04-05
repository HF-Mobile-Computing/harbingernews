require 'spec_helper'

describe "Static pages" do
  
  describe "Home page" do
  
    it "should have the content 'Harbinger'" do
    
      visit '/'
      page.should have_content('Harbinger')
    
    end
  
  end

end