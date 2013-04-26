require "spec_helper"

describe UpcomingEventsController do
  describe "routing" do

    it "routes to #index" do
      get("/upcoming_events").should route_to("upcoming_events#index")
    end

    it "routes to #new" do
      get("/upcoming_events/new").should route_to("upcoming_events#new")
    end

    it "routes to #show" do
      get("/upcoming_events/1").should route_to("upcoming_events#show", :id => "1")
    end

    it "routes to #edit" do
      get("/upcoming_events/1/edit").should route_to("upcoming_events#edit", :id => "1")
    end

    it "routes to #create" do
      post("/upcoming_events").should route_to("upcoming_events#create")
    end

    it "routes to #update" do
      put("/upcoming_events/1").should route_to("upcoming_events#update", :id => "1")
    end

    it "routes to #destroy" do
      delete("/upcoming_events/1").should route_to("upcoming_events#destroy", :id => "1")
    end

  end
end
