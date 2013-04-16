# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)
Announcement.create(content: "This is an announcement", a_or_b: "A")
Club.create(name: "Art Club", category: "arts", content: "Content for the Art Club", slug: "art_club")
Club.create(name: "Academic Club", category: "academic", content: "Content for the Academic Club", slug: "academic")
Club.create(name: "Community Outreach", category: "community", content: "Content for the Community Outreach Club", slug:"community")
Club.create(name: "Spanish Club", category: "cultural", content: "Content for the Spanish Club", slug: "spanish")
Club.create(name: "Forensics Club", category: "science", content: "Content for the Forensics Club", slug: "forensics")
Club.create(name: "Athletes Helping Athletes", category: "services", content: "Content for AHA", slug: "aha")

