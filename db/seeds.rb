# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# Annoucements
if Announcement.count == 0
    Announcement.create(content: "This is an announcement", a_or_b: "A")
    puts "Created announcement"
else
    puts "Announcements already exist"
end
# Memos
if Memo.count == 0
	Memo.create(title: "Test Memo 1", content: "This is the content for test memo one.", bg_color: 'FF0000', text_color: '000000')
	Memo.create(title: "Test Memo 2", content: "This is the content for test memo two.", bg_color: 'FFFF00', text_color: '000000')
	Memo.create(title: "Test Memo 3", content: "This is the content for test memo three.", bg_color: 'FFA500', text_color: '000000')
	Memo.create(title: "Test Memo 4", content: "This is the content for test memo four.", bg_color: '008000', text_color: '000000')
	Memo.create(title: "Test Memo 5", content: "This is the content for test memo five.", bg_color: '0000FF', text_color: '000000')
	Memo.create(title: "Test Memo 6", content: "This is the content for test memo six.", bg_color: '00FFFF', text_color: '000000')
	Memo.create(title: "Test Memo 7", content: "This is the content for test memo seven.", bg_color: '80080', text_color: '000000')
	Memo.create(title: "Test Memo 8", content: "This is the content for test memo eight.", bg_color: 'FFC0CB', text_color: '000000')
	Memo.create(title: "Test Memo 9", content: "This is the content for test memo nine.", bg_color: '2F4F4F', text_color: '000000')
	Memo.create(title: "Test Memo 10", content: "This is the content for test memo ten.", bg_color: 'DAA520', text_color: '')
	Memo.create(title: "Test Memo 11", content: "This is the content for test memo eleven.", bg_color: '20B2AA', text_color: '000000')
	Memo.create(title: "Test Memo 12", content: "This is the content for test memo twelve.", bg_color: '4682B4', text_color: '000000')
	puts "Created memos"
else
	puts "Memos already exist"
end
# Clubs
if Club.count == 0
	Club.create(name: "Art Club", category: "arts", content: "Content for the Art Club", slug: "art_club")
	Club.create(name: "Academic Club", category: "academic", content: "Content for the Academic Club", slug: "academic")
	Club.create(name: "Community Outreach", category: "community", content: "Content for the Community Outreach Club", slug:"community")
	Club.create(name: "Spanish Club", category: "cultural", content: "Content for the Spanish Club", slug: "spanish")
	Club.create(name: "Forensics Club", category: "sciences", content: "Content for the Forensics Club", slug: "forensics")
	Club.create(name: "Athletes Helping Athletes", category: "services", content: "Content for AHA", slug: "aha")
	puts "Created clubs"
else
	puts "Clubs already exist"
end
# Sports
if Sport.count == 0
	Sport.create(slug: "basketball", title: "Basketball", content: "This is the Basketball page.", season: "winter")
	Sport.create(slug: "football", title: "Football", content: "This is the Football page.", season: "fall")
	Sport.create(slug: "baseball", title: "Baseball", content: "This is the Baseball page.", season: "spring")
	puts "Created sports"
else
	puts "Sports already exist"
end

# Buses
if Bus.count == 0
	Bus.create(one: '1', two: '2', three: '3', four: '4', five: '5', six: '6', seven: '7', eight: '8', nine: '9', ten: '10', eleven: '11', twelve: '12', thirteen: '13', fourteen: '14', fifteen: '15', sixteen: '16', seventeen: '17', eighteen: '18', nineteen: '19', twenty: '20')
	puts "Buses created"
else
	puts "Buses already exist"
end

# Upcoming
if UpcomingEvent.count == 0
	UpcomingEvent.create(content: "<p>These are the upcoming events.</p>")
	puts "Created upcoming event"
else
	puts "Upcoming events already exist"
end
# Recent
if RecentEvent.count == 0
	RecentEvent.create(content: "<p>These are the recent events.</p>")
	puts "Created recent events"
else
	puts "Recent events already exist"
end

puts "Seed complete!"
