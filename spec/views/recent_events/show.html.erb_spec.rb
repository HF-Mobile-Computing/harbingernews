require 'spec_helper'

describe "recent_events/show" do
  before(:each) do
    @recent_event = assign(:recent_event, stub_model(RecentEvent))
  end

  it "renders attributes in <p>" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
