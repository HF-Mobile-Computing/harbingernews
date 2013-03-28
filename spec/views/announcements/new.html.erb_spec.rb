require 'spec_helper'

describe "announcements/new" do
  before(:each) do
    assign(:announcement, stub_model(Announcement,
      :a_or_b => "MyString",
      :content => "MyText"
    ).as_new_record)
  end

  it "renders new announcement form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => announcements_path, :method => "post" do
      assert_select "input#announcement_a_or_b", :name => "announcement[a_or_b]"
      assert_select "textarea#announcement_content", :name => "announcement[content]"
    end
  end
end
