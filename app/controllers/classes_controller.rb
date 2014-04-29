class ClassesController < ApplicationController
  def index
  	@classes = AcademicClass.all
  	@english = AcademicClass.where(:category => "english")
  	@social_studies = AcademicClass.where(:category => "social_studies")
  	@science = AcademicClass.where(:category => "science")
  	@math = AcademicClass.where(:category => "math")
  	@foreign_language = AcademicClass.where(:category => "foreign_language")
  	@arts_and_music = AcademicClass.where(:category => "arts_and_music")
    @grades = AcademicClass.where(:category => "grades")

    @class_announcement = ClassAnnouncement.last
  end

  def show
  	@class = AcademicClass.find_by_slug(params[:slug])
  end
end
