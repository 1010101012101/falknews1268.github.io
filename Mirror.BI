Skip to content
We are having a problem billing the 1010101012101 organization. Please update your payment method or call your payment provider for details on why the transaction failed. If you don’t need access to your private repositories, you can downgrade to the Free plan.
You can always contact support with any questions.

arduino end to end py
Repositories0
Code56K
Commits35
Issues1K
Marketplace0
Topics0
Wikis219
Users0
Language

Sort

56,934 code results
@kmclaugh
kmclaugh/Pill_Case – Pill_Case_Copy.sh
Showing the top five matches
Last indexed on Jun 27, 2018
Shell
cd Projects/Pill_Case/Photoresistor_Array

#Copying current files to project directory
cp -a . $PHOTO_RES_DIR/Hardware/Circuit/
#End Diptrace
#Copying current files to project directory
cp -a . $ARDUINO_DIR/Hardware/Circuit/
#End Diptrace
@mschuldt
mschuldt/maml – README.org
Showing the top nine matches
Last indexed on Jun 29, 2018
Org
./maml.py -d filename.maml
#+END_SRC

to compile and send code to an Arduino
#+Begin_SRC text
./maml.py -a filename.maml
#+END_SRC
if you want to interact with it:
#+Begin_SRC text
python3 -i maml.py -a filename.maml
#+END_SRC
@AntonKokschool
AntonKokschool/Project-2.1---Python-V2 – workspace.xml
Showing the top eight matches
Last indexed on Jul 11, 2018
XML
    <task id="LOCAL-00015" summary="Added port class. Added buttons to control Arduino. Arduino can now be contoled from PyDuino">
    <MESSAGE value="Renamed file." />
    <MESSAGE value="Main.py now triggers te program to launch the interface and add Arduino's to the interface" />
@ObOsCode
ObOsCode/pyRobotics – workspace.xml
Showing the top four matches
Last indexed on Nov 19, 2018
XML
      <change beforePath="$PROJECT_DIR$/roboticsnt/commandProtocol/arduino_connection.py" beforeDir="false" />
      <change beforePath="$PROJECT_DIR$/roboticsnt/commandProtocol/command_protocol.py" beforeDir="false" afterPath="$PROJECT_DIR$/roboticsnt/commandProtocol/command_protocol.py" afterDir="false" />
      <change beforePath="$PROJECT_DIR$/roboticsnt/computerVision/detectors.py" beforeDir="false" afterPath="$PROJECT_DIR$/roboticsnt/computerVision/detectors.py" afterDir="false" />
      <change beforePath="$PROJECT_DIR$/tests/Arduino/control_arduino.py" beforeDir="false" afterPath="$PROJECT_DIR$/tests/Arduino/control_arduino.py" afterDir="false" />
@stigok
stigok/blog.stigok.com – 2018-06-12-esp8266-ota-updates-command-line.md
Showing the top four matches
Last indexed on Sep 25, 2018
Markdown
Download and set execute permissions for easy usage

    $ curl -O https://github.com/esp8266/Arduino/blob/master/tools/espota.py
    $ chmod +x espota.py

Now move that file to a folder in your path.

## Prepare an OTA image

This first time, I have to be physically connected. When the OTA code has
@RexxarCHL
RexxarCHL/UR5_Plays_Jenga – README.md
Showing the top nine matches
Last indexed on Jul 14, 2018
Markdown
* jenga_msgs - Messages needed to control the end-effector
* rosserial - Provides serial communication to Arduino board on the end-effector
5. Run **rosrun rosserial_arduino make_libraries.py ~/Arduino/libraries/**
6. Open "~Arduino/libraries/ros_lib/ros.h"
7. Modify to
@apphx
apphx/RC_Conti – workspace.xml
Showing the top five matches
Last indexed on Jul 7, 2018
XML
  <component name="FileEditorManager">
    <leaf SIDE_TABS_SIZE_LIMIT_KEY="300">
      <file leaf-file-name="ArduinoSlave.py" pinned="false" current-in-tab="false">
        <entry file="file://$PROJECT_DIR$/RC_ArduinoSlave_RPI/ArduinoSlave.py">
          <provider selected="true" editor-type-id="text-editor">
@Gepro83
Gepro83/RemoteSocket – server.js
Showing the top four matches
Last indexed on Jul 6, 2018
JavaScript
// just print everything coming from python to console, these are just status messages
arduinoPy.stdout.on('data', function (message) {
  console.log(message.toString('utf-8'));
        if (data['on'] == '1') {
          // send turn on signal to adruino
          arduinoPy.stdin.write('on\n');
@mprat
mprat/MEET-sessions – ArduinoIntroTutorial.tex
Showing the top six matches
Last indexed on Jun 27, 2018
TeX
  A \textbf{breadboard} is a grid used putting together electrical
  components. Like this:
\end{itemize}\subsection{Arduino: the easiest way to get started }
  test it is to upload it to the Arduino and make sure it does what you
  want it to do.
\end{itemize}
\subsubsection{Opening the Arduino IDE}
@ewersbrent
ewersbrent/Wyoming-EPSCoR-Coding-Camp – workspace.xml
Showing the top four matches
Last indexed on Jul 3, 2018
XML
    <leaf SIDE_TABS_SIZE_LIMIT_KEY="300">
      <file leaf-file-name="Moisture_Sensor___Arduino.py" pinned="false" current-in-tab="false">
        <entry file="file://$PROJECT_DIR$/Moisture Sensor-Arduino/Moisture_Sensor___Arduino.py">
          <provider selected="true" editor-type-id="text-editor">
            <state relative-caret-position="221">
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
Press h to open a hovercard with more details.
