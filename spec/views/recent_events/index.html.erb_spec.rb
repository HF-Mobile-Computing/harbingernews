require 'spec_helper'

describe "recent_events/index" do
  before(:each) do
    assign(:recent_events, [
      stub_model(RecentEvent),
      stub_model(RecentEvent)
    ])
  end

  it "renders a list of recent_events" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
