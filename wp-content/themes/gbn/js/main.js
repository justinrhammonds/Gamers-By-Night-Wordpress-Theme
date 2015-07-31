jQuery(document).ready(function($) {

                $(function(){
                    $(".left-typed").typed({
                        strings: [ 
                            "Peter Parker^4400", // 1st sentence, 12 characters. +2sec delay.
                            "^1000Clark Kent^4000", // 2nd sentence, 10 characters. + 2sec delay, +1sec on front.
                            "^1000Bruce Wayne^4200", // 3rd sentence, 11 characters. +2sec delay, +1sec on front.
                            "^1000Anthony Stark^4600", // 4th sentence, 13 characters. +2sec delay, +1sec on front.
                            "^1000Bruce Banner^4400", // 5th sentence, 12 characters.
                            "^1000Selena Kyle^4200", // 6th sentence, 11 characters.
                            "^1000Steve Rogers   ^5000", // 7th sentence, 15 characters.
                            "^1000Oliver Queen^4400", // 8th sentence, 12 characters.
                            "^1000Barry Allen^4200", // 9th sentence, 11 characters.
                            "^1000Donald Blake^4400", // 10th sentence, 12 characters.
                            "^1000Matt Murdock^4400", // 11th sentence, 12 characters.
                            "^1000Billy Batson  ^4800", // 12th sentence, 14 characters.
                            "^1000Diana Prince^4400", // 13th sentence, 12 characters.
                            "^1000Hal Jordan   ^4600", // 14th sentence, 13 characters.
                            "^1000Carter Hall^4200", // 15th sentence, 11 characters.
                            "^1000Johnny Storm^4400", // 16th sentence, 12 characters.
                            "^1000Reed Richards   ^5200", // 17th sentence, 16 characters.
                            "^1000Frank Castle^4400", // 18th sentence, 12 characters.
                            "^1000Linda Danvers^4600", // 19th sentence, 13 characters.
                            ],
                        // typing speed
                        typeSpeed: 200,
                        // time before typing starts
            			startDelay: 1000,
            			// backspacing speed
            			backSpeed: 40,
            			// time before backspacing
            			backDelay: 0,
            			// loop
            			loop: true,
            			// false = infinite
            			loopCount: true,
            			// show cursor
            			showCursor: false,
                    });
                });
    
                $(function(){
                    $(".right-typed").typed({
                        strings: [ 
                            "^4400Spiderman   ", // 1st sentence, 12 characters. 
                            "^5000Superman  ", // 2nd sentence, 10 characters. +1sec on front.
                            "^5200Batman     ", // 3rd sentence, 11 characters. +1sec on front.
                            "^5600Ironman      ", // 4th sentence, 13 characters. +1sec on front.
                            "^5400The Hulk    ", // 5th sentence, 12 characters.
                            "^5200Catwoman   ", // 6th sentence, 11 characters.
                            "^6000Captain America", // 7th sentence, 15 characters.
                            "^5400Green Arrow ", // 8th sentence, 12 characters.
                            "^5200Flash      ", // 9th sentence, 11 characters.
                            "^5400Thor        ", // 10th sentence, 12 characters.
                            "^5400Daredevil   ", // 11th sentence, 12 characters.
                            "^5800Captain Marvel", // 12th sentence, 14 characters.
                            "^5400Wonder Woman", // 13th sentence, 12 characters.
                            "^5600Green Lantern", // 14th sentence, 13 characters.
                            "^5200Hawkman    ", // 15th sentence, 11 characters.
                            "^5400Human Torch ", // 16th sentence, 12 characters.
                            "^6200Mister Fantastic", // 17th sentence, 16 characters.
                            "^5400The Punisher", // 18th sentence, 12 characters.
                            "^5600Supergirl    ", // 19th sentence, 13 characters.
                            ],
                        // typing speed
                        typeSpeed: 200,
                        // time before typing starts
            			startDelay: 1000,
            			// backspacing speed
            			backSpeed: 40,
            			// time before backspacing
            			backDelay: 0,
            			// loop
            			loop: true,
            			// false = infinite
            			loopCount: true,
            			// show cursor
            			showCursor: false,
                    });
                });
            
});