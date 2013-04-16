# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# Sports:
#  => Sport(id: integer, slug: string, title: string, content: text, season: string, photo_path: string, created_at: datetime, updated_at: datetime, alert: text) 

Sport.create(slug: "basketball", title: "Basketball", content: "This is the Basketball page.", season: "winter")
Sport.create(slug: "football", title: "Football", content: "This is the Football page.", season: "fall")
Sport.create(slug: "baseball", title: "Baseball", content: "This is the Baseball page.", season: "spring")