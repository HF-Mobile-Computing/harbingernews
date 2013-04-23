require 'spec_helper'

describe "buses/index" do
  before(:each) do
    assign(:buses, [
      stub_model(Bus),
      stub_model(Bus)
    ])
  end

  it "renders a list of buses" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
