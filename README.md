# WebGL_data_test
testing code that allows unity webgl game and php script to communicate with each other on the same server and save data to text file


1. build_1 folder contains the files for the webgl build
   a. the Build subfolder contains the files of the webgl build
   b. the template data folder includes some things unity requires for their application like their logos, icons, and progress bars
   c. the data folder contains the textfile that the php script creates when the webgl app is hosted on a server
   d. the fromunity.php file is the php script that takes in data that is posted from unity while the game is running and writes it to a text file

2. if you wish to recreate the game in your own unity editor you can import the package_for_editor.unitypackage file into a new 3D unity project and it will include the necessary files and scripts to work with the game
   a. download file
   b. create new 3D project in UnityHub
   c. once created go to Assets > Import Package > (Custom Package) and choose the file wherever you saved it
   d. import all files (should only be a few)  
