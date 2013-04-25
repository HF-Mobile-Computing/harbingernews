require 'spec_helper'

describe "buses/show" do
  before(:each) do
    @bus = assign(:bus, stub_model(Bus))
  end

  it "renders attributes in <p>" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
