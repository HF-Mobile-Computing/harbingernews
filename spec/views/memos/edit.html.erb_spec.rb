require 'spec_helper'

describe "memos/edit" do
  before(:each) do
    @memo = assign(:memo, stub_model(Memo))
  end

  it "renders the edit memo form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => memos_path(@memo), :method => "post" do
    end
  end
end
