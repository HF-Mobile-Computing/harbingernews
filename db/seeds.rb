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
Memo.create(title: "Test Memo 1", content: "This is the content for test memo one.", bg_color: 'red')
Memo.create(title: "Test Memo 2", content: "This is the content for test memo two.", bg_color: 'yellow')
Memo.create(title: "Test Memo 3", content: "This is the content for test memo three.", bg_color: 'orange')
Memo.create(title: "Test Memo 4", content: "This is the content for test memo four.", bg_color: 'green')
Memo.create(title: "Test Memo 5", content: "This is the content for test memo five.", bg_color: 'blue')
Memo.create(title: "Test Memo 6", content: "This is the content for test memo six.", bg_color: 'aqua')
Memo.create(title: "Test Memo 7", content: "This is the content for test memo seven.", bg_color: 'purple')
Memo.create(title: "Test Memo 8", content: "This is the content for test memo eight.", bg_color: 'pink')
Memo.create(title: "Test Memo 9", content: "This is the content for test memo nine.", bg_color: 'DarkSlateGray')
Memo.create(title: "Test Memo 10", content: "This is the content for test memo ten.", bg_color: 'GoldenRod')
Memo.create(title: "Test Memo 11", content: "This is the content for test memo eleven.", bg_color: 'LightSeaGreen')
Memo.create(title: "Test Memo 12", content: "This is the content for test memo twelve." bg_color: 'SteelBlue')

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