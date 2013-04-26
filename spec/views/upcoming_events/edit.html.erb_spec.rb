require 'spec_helper'

describe "upcoming_events/edit" do
  before(:each) do
    @upcoming_event = assign(:upcoming_event, stub_model(UpcomingEvent))
  end

  it "renders the edit upcoming_event form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => upcoming_events_path(@upcoming_event), :method => "post" do
    end
  end
end
