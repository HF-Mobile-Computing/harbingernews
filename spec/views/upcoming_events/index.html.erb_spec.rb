require 'spec_helper'

describe "upcoming_events/index" do
  before(:each) do
    assign(:upcoming_events, [
      stub_model(UpcomingEvent),
      stub_model(UpcomingEvent)
    ])
  end

  it "renders a list of upcoming_events" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
