json.homepage do
	json.announcement strip_tags(@announcement.content)
	json.recent strip_tags(@recent.content)
	json.upcoming strip_tags(@upcoming.content)
	json.day @day.aorb
end