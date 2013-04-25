require 'spec_helper'

describe "buses/new" do
  before(:each) do
    assign(:bus, stub_model(Bus).as_new_record)
  end

  it "renders new bus form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => buses_path, :method => "post" do
    end
  end
end
