require 'spec_helper'

describe "upcoming_events/new" do
  before(:each) do
    assign(:upcoming_event, stub_model(UpcomingEvent).as_new_record)
  end

  it "renders new upcoming_event form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => upcoming_events_path, :method => "post" do
    end
  end
end
