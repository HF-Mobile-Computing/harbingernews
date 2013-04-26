require 'spec_helper'

describe "upcoming_events/show" do
  before(:each) do
    @upcoming_event = assign(:upcoming_event, stub_model(UpcomingEvent))
  end

  it "renders attributes in <p>" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
