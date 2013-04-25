require 'spec_helper'

describe "recent_events/new" do
  before(:each) do
    assign(:recent_event, stub_model(RecentEvent).as_new_record)
  end

  it "renders new recent_event form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => recent_events_path, :method => "post" do
    end
  end
end
