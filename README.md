# BATTLEPASS WEB EDITOR
Customize your Battlepass challenges easily with Zibuu's Web Interface

# CONTENTS
1. YAML Folder
2. Empty database

# INSTALLATION
1. Setup your MySQL credentials on yaml/includes/database.php
2. Import battlepass_creator.sql into your database

# USAGE

1. Fill out the input form
2. Locate the documents folder
3. Copy the output data from missions.yml
4. Remove extra "---" and "..." generated data
5. Copy the content into your Battlepass missions YAML file

# FOLDERS
assets: Contains css data
documents: Contains output yaml data
includes: Contains required scripts to work properly

# FILES
battlepass_creator.sql: Empty SQL database
index.php: Input form and web structure
style.css: Website css style
missions.yml: Complete output data
output.yml: Latest input data will be here, for the whole input data, refer to missions.yml
database.php: Database configuration file
savedata.php: Script to insert out form data into our database
translator.php: Script to translate our database data to a YAML structure
