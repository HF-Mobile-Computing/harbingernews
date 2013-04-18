# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# Annoucements
Announcement.create(content: "This is an announcement", a_or_b: "A")

# Memos
Memo.create(title: "Test Memo 1", content: "This is the content for test memo one.")
Memo.create(title: "Test Memo 2", content: "This is the content for test memo two.")
Memo.create(title: "Test Memo 3", content: "This is the content for test memo three.")
Memo.create(title: "Test Memo 4", content: "This is the content for test memo four.")
Memo.create(title: "Test Memo 5", content: "This is the content for test memo five.")
Memo.create(title: "Test Memo 6", content: "This is the content for test memo six.")
Memo.create(title: "Test Memo 7", content: "This is the content for test memo seven.")
Memo.create(title: "Test Memo 8", content: "This is the content for test memo eight.")
Memo.create(title: "Test Memo 9", content: "This is the content for test memo nine.")
Memo.create(title: "Test Memo 10", content: "This is the content for test memo ten.")
Memo.create(title: "Test Memo 11", content: "This is the content for test memo eleven.")
Memo.create(title: "Test Memo 12", content: "This is the content for test memo twelve.")

# Clubs
Club.create(name: "Art Club", category: "arts", content: "Content for the Art Club", slug: "art_club")
Club.create(name: "Academic Club", category: "academic", content: "Content for the Academic Club", slug: "academic")
Club.create(name: "Community Outreach", category: "community", content: "Content for the Community Outreach Club", slug:"community")
Club.create(name: "Spanish Club", category: "cultural", content: "Content for the Spanish Club", slug: "spanish")
Club.create(name: "Forensics Club", category: "science", content: "Content for the Forensics Club", slug: "forensics")
Club.create(name: "Athletes Helping Athletes", category: "services", content: "Content for AHA", slug: "aha")

# Sports
Sport.create(slug: "basketball", title: "Basketball", content: "This is the Basketball page.", season: "winter")
Sport.create(slug: "football", title: "Football", content: "This is the Football page.", season: "fall")
Sport.create(slug: "baseball", title: "Baseball", content: "This is the Baseball page.", season: "spring")