$(document).ready(function(){

			/*
			 * Instance CirclePlayer inside jQuery doc ready
			 *
			 * CirclePlayer(jPlayerSelector, media, options)
			 *   jPlayerSelector: String - The css selector of the jPlayer div.
			 *   media: Object - The media object used in jPlayer("setMedia",media).
			 *   options: Object - The jPlayer options.
			 *
			 * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
			 */

			var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
			{
				m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
				oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			}, {
				cssSelectorAncestor: "#cp_container_1"
			});

			// This code creates a 2nd instance. Delete if not required.

			var myOtherOne = new CirclePlayer("#jquery_jplayer_2",
			{
				m4a:"http://www.jplayer.org/audio/m4a/Miaow-04-Lismore.m4a",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
			}, {
				cssSelectorAncestor: "#cp_container_2"
			});
});