require "spec_helper"

describe BusesController do
  describe "routing" do

    it "routes to #index" do
      get("/buses").should route_to("buses#index")
    end

    it "routes to #new" do
      get("/buses/new").should route_to("buses#new")
    end

    it "routes to #show" do
      get("/buses/1").should route_to("buses#show", :id => "1")
    end

    it "routes to #edit" do
      get("/buses/1/edit").should route_to("buses#edit", :id => "1")
    end

    it "routes to #create" do
      post("/buses").should route_to("buses#create")
    end

    it "routes to #update" do
      put("/buses/1").should route_to("buses#update", :id => "1")
    end

    it "routes to #destroy" do
      delete("/buses/1").should route_to("buses#destroy", :id => "1")
    end

  end
end
