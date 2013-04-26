require "spec_helper"

describe RecentEventsController do
  describe "routing" do

    it "routes to #index" do
      get("/recent_events").should route_to("recent_events#index")
    end

    it "routes to #new" do
      get("/recent_events/new").should route_to("recent_events#new")
    end

    it "routes to #show" do
      get("/recent_events/1").should route_to("recent_events#show", :id => "1")
    end

    it "routes to #edit" do
      get("/recent_events/1/edit").should route_to("recent_events#edit", :id => "1")
    end

    it "routes to #create" do
      post("/recent_events").should route_to("recent_events#create")
    end

    it "routes to #update" do
      put("/recent_events/1").should route_to("recent_events#update", :id => "1")
    end

    it "routes to #destroy" do
      delete("/recent_events/1").should route_to("recent_events#destroy", :id => "1")
    end

  end
end
