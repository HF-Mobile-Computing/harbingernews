require 'spec_helper'

describe "buses/edit" do
  before(:each) do
    @bus = assign(:bus, stub_model(Bus))
  end

  it "renders the edit bus form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => buses_path(@bus), :method => "post" do
    end
  end
end
