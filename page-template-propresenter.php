<?php
/*
Template Name: ProPresenter File Generator
*/
header('Content-Disposition: attachment; filename="announcements.pro6"');
?>
<RVPresentationDocument
  CCLIArtistCredits=""
  CCLIAuthor=""
  CCLICopyrightYear=""
  CCLIDisplay="false"
  CCLIPublisher=""
  CCLISongNumber=""
  CCLISongTitle="announcements 1.0"
  backgroundColor="0 0 0 0"
  buildNumber=""
  category=""
  chordChartPath=""
  docType="0"
  drawingBackgroundColor="false"
  height="1080"
  lastDateUsed=""
  notes=""
  os="2"
  resourcesDirectory=""
  selectedArrangementID=""
  usedCount="0"
  uuid=""
  versionNumber="600"
  width="1920">
  <RVTimeline duration="0.000000" loop="false" rvXMLIvarName="timeline" selectedMediaTrackIndex="0" timeOffset="0.000000">
    <array rvXMLIvarName="timeCues"></array>
    <array rvXMLIvarName="mediaTracks"></array>
  </RVTimeline>
  <array rvXMLIvarName="groups">
    <RVSlideGrouping color="0 0 0 0" name="" uuid="announcements-grouping-<?php echo gettimeofday()['usec']; ?>">
      <array rvXMLIvarName="slides">

<?php

// SETTINGS
$slide_duration = '10'; //in seconds. don't use a decimal

// INIT
$args = array(
	'category__in'     => array(1,48),
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts_array = get_posts( $args );

foreach ($posts_array as $slide) {

  // SETUP (FOR EACH POST)
  $green_text = get_post_meta($slide->ID, 'propresenter_green_text', true);
  $is_last = (end($posts_array) == $slide) ? 'true' : 'false' ;
  $uuid_stamp = $slide->ID.'-'.gettimeofday()['usec'];

  // SLIDE TITLE TEXT
  $toEncode = '{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
  {\fonttbl\f0\fnil\fcharset0 PlayfairDisplay-Regular;}
  {\colortbl;\red255\green255\blue255;\red42\green42\blue42;}
  {\*\expandedcolortbl;;\cspthree\c21580\c21579\c21579;}
  \pard\slleading40\pardirnatural\partightenfactor0

  \f0\fs110 \cf2 \expnd0\expndtw0\kerning0
  '.wp_strip_all_tags($slide->post_content, true).'}';
  $slide_title_text = base64_encode($toEncode);

  // SLIDE CONTENT TEXT
  $toEncode = '{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
  {\fonttbl\f0\fnil\fcharset0 PlayfairDisplay-Regular;}
  {\colortbl;\red255\green255\blue255;\red42\green42\blue42;}
  {\*\expandedcolortbl;;\cspthree\c21580\c21579\c21579;}
  \pard\slleading40\pardirnatural\partightenfactor0

  \f0\fs110 \cf2 \expnd0\expndtw0\kerning0
  '.wp_strip_all_tags($slide->post_content, true).'}';
  $slide_content_text = base64_encode($toEncode);

  // SLIDE GREEN TEXT
  $toEncode = '{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
  {\fonttbl\f0\fnil\fcharset0 Montserrat-SemiBold;}
  {\colortbl;\red255\green255\blue255;\red71\green203\blue114;}
  {\*\expandedcolortbl;;\cspthree\c46638\c80820\c54649;}
  \pard\pardirnatural\partightenfactor0

  \f0\b\fs88 \cf2 \kerning1\expnd4\expndtw20
  '.$green_text.'}';
  $slide_green_text = base64_encode($toEncode);

  /* POST OBJECT REFERENCE *
  echo '<pre>';
  print_r($slide);
  echo '</pre><br/><strong>META: </strong>';
  echo get_post_meta($slide->ID, 'propresenter_green_text', true);
  echo '<br/><br/>';
  /* POST OBJECT REFERENCE END */
?>
        <RVDisplaySlide UUID="" backgroundColor="0 0 0 1" chordChartPath="" drawingBackgroundColor="false" enabled="true" highlightColor="0 0 0 0" hotKey="" label="" notes="" socialItemCount="1">
          <array rvXMLIvarName="cues">
            <RVSlideTimerCue UUID="" actionType="0" delayTime="0.000000" displayName="Go to Next" duration="<?php echo $slide_duration; ?>.000000" enabled="false" loopToBeginning="<?php echo $is_last; ?>" timeStamp="0.000000"></RVSlideTimerCue>
          </array>
          <RVMediaCue
            UUID=""
            actionType="0"
            alignment="4"
            behavior="2"
            dateAdded=""
            delayTime="0.000000"
            displayName="sundayslides-blank-noline"
            enabled="false"
            nextCueUUID=""
            rvXMLIvarName="backgroundMediaCue"
            tags=""
            timeStamp="0.000000">
            <RVImageElement
              UUID=""
              bezelRadius="0.000000"
              displayDelay="0.000000"
              displayName="ImageElement"
              drawingFill="false"
              drawingShadow="false"
              drawingStroke="false"
              fillColor="0 0 0 0"
              flippedHorizontally="false"
              flippedVertically="false"
              format="Portable Network Graphics image"
              fromTemplate="false"
              imageOffset="{0, 0}"
              locked="false"
              manufactureName=""
              manufactureURL=""
              opacity="1.000000"
              persistent="false"
              rotation="0.000000"
              rvXMLIvarName="element"
              scaleBehavior="0"
              scaleSize="{1, 1}"
              source="file:///Users/gym-worship/Downloads/sundayslides-blank-noline.png"
              typeID="0">
              <RVRect3D rvXMLIvarName="position">{0 0 0 0 0}</RVRect3D>
              <shadow rvXMLIvarName="shadow">0.000000|0 0 0 0.3333333432674408|{4, -4}</shadow>
              <dictionary rvXMLIvarName="stroke">
                <NSColor rvXMLDictionaryKey="RVShapeElementStrokeColorKey">0 0 0 1</NSColor>
                <NSNumber hint="float" rvXMLDictionaryKey="RVShapeElementStrokeWidthKey">1.000000</NSNumber>
              </dictionary>
            </RVImageElement>
          </RVMediaCue>
          <array rvXMLIvarName="displayElements">
            <RVTextElement
              UUID="textelement1-<?php echo $uuid_stamp; ?>"
              additionalLineFillHeight="0.000000"
              adjustsHeightToFit="false"
              bezelRadius="0.000000"
              displayDelay="0.000000"
              displayName="SlideContentText"
              drawLineBackground="false"
              drawingFill="false"
              drawingShadow="false"
              drawingStroke="false"
              fillColor="0 0 0 1"
              fromTemplate="false"
              lineFillVerticalOffset="0.000000"
              locked="false"
              opacity="1.000000"
              persistent="false"
              revealType="0"
              rotation="0.000000"
              source=""
              typeID="0"
              useAllCaps="false"
              verticalAlignment="1">
              <RVTransition
                groupIndex="0"
                motionDuration="0.000000"
                motionEnabled="false"
                motionSpeed="0.000000"
                orderIndex="2"
                rvXMLIvarName="transitionInObject"
                slideBuildAction="3"
                slideBuildDelay="1.800000"
                transitionDirection="3"
                transitionDuration="1.000000"
                transitionType="0"></RVTransition>
              <RVRect3D rvXMLIvarName="position">{232 408 0 1453 459}</RVRect3D>
              <shadow rvXMLIvarName="shadow">0.000000|0 0 0 0.3333333333333333|{4, -4}</shadow>
              <dictionary rvXMLIvarName="stroke">
                <NSColor rvXMLDictionaryKey="RVShapeElementStrokeColorKey">0 0 0 1</NSColor>
                <NSNumber hint="float" rvXMLDictionaryKey="RVShapeElementStrokeWidthKey">1.000000</NSNumber>
              </dictionary>
              <NSString rvXMLIvarName="RTFData"><?php echo $slide_content_text; ?></NSString>
            </RVTextElement>
            <RVTextElement
              UUID="textelement2-<?php echo $uuid_stamp; ?>"
              additionalLineFillHeight="0.000000"
              adjustsHeightToFit="false"
              bezelRadius="0.000000"
              displayDelay="0.000000"
              displayName="SlideTitleText"
              drawLineBackground="false"
              drawingFill="false"
              drawingShadow="false"
              drawingStroke="false"
              fillColor="0 0 0 1"
              fromTemplate="false"
              lineFillVerticalOffset="0.000000"
              locked="false"
              opacity="1.000000"
              persistent="false"
              revealType="0"
              rotation="0.000000"
              source=""
              typeID="0"
              useAllCaps="false"
              verticalAlignment="0">
              <RVTransition
                groupIndex="0"
                motionDuration="0.000000"
                motionEnabled="false"
                motionSpeed="0.000000"
                orderIndex="0"
                rvXMLIvarName="transitionInObject"
                slideBuildAction="3"
                slideBuildDelay="1.000000"
                transitionDirection="3"
                transitionDuration="0.700000"
                transitionType="0"></RVTransition>
              <RVRect3D rvXMLIvarName="position">{230 106 0 1536 267}</RVRect3D>
              <shadow rvXMLIvarName="shadow">0.000000|0 0 0 0.3333333333333333|{4, -4}</shadow>
              <dictionary rvXMLIvarName="stroke">
                <NSColor rvXMLDictionaryKey="RVShapeElementStrokeColorKey">0 0 0 1</NSColor>
                <NSNumber hint="float" rvXMLDictionaryKey="RVShapeElementStrokeWidthKey">1.000000</NSNumber>
              </dictionary>
              <NSString rvXMLIvarName="RTFData"><?php echo $slide_title_text; ?></NSString>
            </RVTextElement>
            <RVTextElement
              UUID="textelement3-<?php echo $uuid_stamp; ?>"
              additionalLineFillHeight="0.000000"
              adjustsHeightToFit="false"
              bezelRadius="0.000000"
              displayDelay="0.000000"
              displayName="SlideGreenText"
              drawLineBackground="false"
              drawingFill="false"
              drawingShadow="false"
              drawingStroke="false"
              fillColor="0 0 0 0"
              fromTemplate="false"
              lineFillVerticalOffset="0.000000"
              locked="false"
              opacity="1.000000"
              persistent="false"
              revealType="0"
              rotation="0.000000"
              source=""
              typeID="0"
              useAllCaps="false"
              verticalAlignment="1">
              <RVTransition
                groupIndex="0"
                motionDuration="0.000000"
                motionEnabled="false"
                motionSpeed="0.000000"
                orderIndex="1"
                rvXMLIvarName="transitionInObject"
                slideBuildAction="3"
                slideBuildDelay="1.400000"
                transitionDirection="3"
                transitionDuration="0.700000"
                transitionType="0"></RVTransition>
              <RVRect3D rvXMLIvarName="position">{230 314 0 1453 118}</RVRect3D>
              <shadow rvXMLIvarName="shadow">0.000000|0 0 0 0.3333333432674408|{4, -4}</shadow>
              <dictionary rvXMLIvarName="stroke">
                <NSColor rvXMLDictionaryKey="RVShapeElementStrokeColorKey">0 0 0 1</NSColor>
                <NSNumber hint="float" rvXMLDictionaryKey="RVShapeElementStrokeWidthKey">1.000000</NSNumber>
              </dictionary>
              <NSString rvXMLIvarName="RTFData"><?php echo $slide_green_text; ?></NSString>
            </RVTextElement>
            <RVShapeElement
              UUID="shape-<?php echo $uuid_stamp; ?>"
              bezelRadius="0.000000"
              displayDelay="0.000000"
              displayName="ShapeElement"
              drawingFill="true"
              drawingShadow="false"
              drawingStroke="false"
              fillColor="0.281698077917099 0.7930265665054321 0.4438668489456177 1"
              fromTemplate="true"
              locked="false"
              opacity="1.000000"
              persistent="false"
              rotation="0.000000"
              source=""
              typeID="0">
              <RVRect3D rvXMLIvarName="position">{237 94 0 239 12}</RVRect3D>
              <shadow rvXMLIvarName="shadow">0.000000|0 0 0 0.3333333333333333|{4, -4}</shadow>
              <dictionary rvXMLIvarName="stroke">
                <NSColor rvXMLDictionaryKey="RVShapeElementStrokeColorKey">0 0 0 1</NSColor>
                <NSNumber hint="float" rvXMLDictionaryKey="RVShapeElementStrokeWidthKey">1.000000</NSNumber>
              </dictionary>
            </RVShapeElement>
          </array>
        </RVDisplaySlide>
<?php
}
?>
      </array>
    </RVSlideGrouping>
  </array>
  <array rvXMLIvarName="arrangements"></array>
</RVPresentationDocument>
