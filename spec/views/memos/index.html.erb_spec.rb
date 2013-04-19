require 'spec_helper'

describe "memos/index" do
  before(:each) do
    assign(:memos, [
      stub_model(Memo),
      stub_model(Memo)
    ])
  end

  it "renders a list of memos" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
  end
end
