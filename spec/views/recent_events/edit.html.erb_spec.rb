require 'spec_helper'

describe "recent_events/edit" do
  before(:each) do
    @recent_event = assign(:recent_event, stub_model(RecentEvent))
  end

  it "renders the edit recent_event form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => recent_events_path(@recent_event), :method => "post" do
    end
  end
end
