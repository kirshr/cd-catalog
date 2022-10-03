-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2011 at 09:12 AM
-- Server version: 5.1.52
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `philredmond`
--

-- --------------------------------------------------------

--
-- Table structure for table `cd_catalog_class`
--

CREATE TABLE IF NOT EXISTS `cd_catalog_class` (
  `artist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `year` int(255) NOT NULL,
  `genre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `artwork` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `label` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `description` longtext COLLATE latin1_general_ci NOT NULL,
  `soundclip` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `cd_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `cd_catalog_class`
--

INSERT INTO `cd_catalog_class` (`artist`, `title`, `year`, `genre`, `artwork`, `label`, `description`, `soundclip`, `cd_id`) VALUES
('Fuel', 'Something Like Human', 2000, 'Alternative Rock', 'Fuel_Something_Like_Human.jpg', 'Epic Records', 'The 2nd album from this post-grunge alternative band did very well, going double platinum in the U.S.\r\n\r\n', 'slow.mp3', 1),
('Soundgarden', 'Down on the Upside', 1996, 'Alternative Rock', 'Soundgarden-DownOnTheUpside.jpg', 'A &amp; M', 'Down on the Upside is the fifth and final studio album by Soundgarden. It was released on May 21, 1996 through A&amp;M Records. \r\nAlthough the album received strong reviews and sent two singles to the top of the Mainstream Rock charts, sales quickly waned and it failed to match the popularity of predecessor Superunknown', '', 2),
('Angelique Kidjo ', 'Keep On Moving: The Best Of ', 2001, 'World', 'Kidjo-KeepOnMoving.jpg', 'Epic', 'Angelique Kidjo is a four-time Grammy nominated Beninese singer-songwriter, noted for her diverse musical influences and creative music videos.', 'summertime.mp3', 3),
('Brittany Spears', 'Greatest Hits', 2004, 'pop', 'Spears-GreatestHits.jpg', 'Jive', 'WOW. With so many hits, how do you decide on her best!', '', 4),
('Pearl Jam', 'Vitology', 1994, 'Alternative Rock', 'PearlJamVitalogy.jpg', 'Epic', 'Pearl Jam is cool!', '', 5),
('Dave Matthews Band', 'Crash', 1996, 'Rock', 'Dmb_crash.jpg', 'RCA', 'Often regarded as the bands most important and successful album to date, perhaps the band\\''s magnum opus of such.', 'toomuch.mp3', 6),
('Led Zeppelin', 'Led Zeppelin 4', 1971, 'Rock', 'LedZeppelinFourSymbols.jpg', 'Atlantic', 'The group&#039;s best known album.\r\nStairway to Heaven... need we say more.\r\nxxx', '', 7),
('Led Zeppelin', 'Led Zeppelin', 1970, 'Rock', 'LedZeppelinLedZeppelinalbumcover.jpg', 'Atlantic', 'Formed from the ashes of Jimmy Page&#039;s contractual obligations remaining from the Yardbirds, Zeppelin fused blues standards with celtic influences and heavy rock riffs to jump start the 70&#039;s heavy metal phase.', '', 8),
('Dave Matthews Band', 'Before These Crowded Streets', 1998, 'Rock', 'DMB_-_Before_These_Crowded_Streets.jpg', 'RCA', 'This was the 4th album by these Virginia tunesmiths, it debuted at #1 on the Billboard 200 charts.', '', 9),
('Dave Matthews Band', 'Everyday', 2001, 'Rock', 'DaveMatthewsBandEveryday.jpg', 'RCA', 'Once again, this album debuted at #1 and has sold over 3 million copies to date.', '', 10),
('Stone Temple Pilots ', 'Core', 1992, 'Alternative Rock', 'Stonetemplepilotscore.jpg', 'Atlantic', 'Perhaps this California grunge band''s definitive release, it charted well with tracks such as Plush and Creep.\r\n\r\n', '', 11),
('Stone Temple Pilots', 'Tiny Music... Songs from the Vatican Gift Shop', 1996, 'Alternative Rock', 'Stonetemplepilotstinymusic.jpg', 'Atlantic', 'Considered a bit of a departure musically for this group, many tracks took inspiration from the Beatles and other retro-influences.', '', 12),
('Alice in Chains', 'Dirt', 1992, 'Rock', 'AliceinChainsDirt.jpg', 'Columbia', 'This Seattle band''s breakthrough album and perhaps their best.\r\n\r\nLayne Staley and Jerry Cantrell had met at a party in 1987 and the band was formed.', '', 13),
('Teletubbies', 'Teletubbies Say Eh-Oh! ', 1997, 'pop', 'Teletubbies-Say-Eh-Oh.jpg', 'BBC Worldwide', 'A single released from this groundbreaking vocal band, it broke down artistic barriers and ventured into uncharted waters stylistically. \r\n\r\nBlah, blah, blah.', '', 14),
('Lenny Kravitz', 'Mama Said', 1991, 'Rock', 'Lenny_Kravitz-Mama_Said.jpg', 'Virgin', 'Lenny''s 2nd album, it featured Always on the Run cowritten by G & R''s Slash.', '', 15),
('Lenny Kravitz', 'Are You Gonna Go My Way', 1993, 'Rock', 'Lenny_Kravitz_Go_My_Way.jpg', 'Virgin', 'Considered by many as his best work. Showed Kravitz''s significant 70''s influence.', '', 16),
('The Dave Brubeck Quartet', 'Time Out ', 1959, 'Jazz', 'Time_out_album_cover.jpg', 'Columbia', 'A classic release by this artist, Time Out featured the use of non-orthodox time signatures.\r\nTake Five was the big single.', '', 17),
('Miles Davis', 'Milestones ', 1958, 'Jazz', 'Milestonescover.jpg', 'Columbia', 'Fast paced bebop tracks and modal jazz experiments define this as one of Miles most significant works.', '', 18),
('Miles Davis', 'Kind of Blue', 1959, 'Jazz', 'MilesDavisKindofBlue.jpg', 'Columbia', 'Certified triple platinum and considered as the biggest selling jazz album of all time.', '', 19),
('Stevie Ray Vaughan ', 'Texas Flood', 1983, 'Blues', 'StevieRayVaughanTexasFlood.jpg', 'Epic', 'The debut album from this blues artist, it brought international attention to this little known guitarist.', '', 20),
('Stevie Ray Vaughan', 'Couldn''t Stand the Weather ', 1984, 'Blues', 'SRVcouldntstandtheweather.jpg', 'Epic', 'More hot blues guitar licks from this Texas wildman.', '', 21),
('Albert Collins', 'Ice Pickin''', 1978, 'Blues', 'Albertcollins.jpg', 'Allligator Records', 'The first album for this label, Albert had already become a legend in the blues community.\r\n\r\nHe played a 66 Fender telecaster which inspired Fender to create a signature guitar in his memory.', '', 22),
('He Is Legend', 'Suck Out The Poison', 2006, 'Alternative Rock', '200px-He_is_Legend_-_Suck_out.jpg', 'Solid State Records', 'Alex made me enter  this CD as an example in class.\r\n\r\nI don''t really own this CD.\r\n', '', 23),
('Simon and Garfunkel', 'Sounds of Silence', 1966, 'Folk', 'SoundsSilence.jpg', 'Columbia Records', 'Sounds of Silence is an album by Simon and Garfunkel, released on January 17, 1966. The album''s title is a slight modification of the title of the duo''s first major hit, " The Sounds of Silence", which was released previously on the album Wednesday Morning, 3 A.M., and also on the soundtrack to the movie The Graduate. "Homeward Bound" was released on the album in the UK. It was also released as part of the box set Simon & Garfunkel Collected Works, on both LP and CD.', '', 24),
('Sex Pistols', 'Never Mind the Bollocks, Here''s the Sex Pistols', 1977, 'Punk', 'Never_Mind_the_Bollocks.jpg', 'Virgin', 'Never Mind the Bollocks, Here''s the Sex Pistols is the only album recorded by the seminal English punk rock band, Sex Pistols. It is now regarded as a classic and influential rock and roll and punk rock album by fans and critics alike.', '', 25),
('Propellerheads', 'Decksandrumsandrockandroll', 1998, 'Electronic', 'Propellerheads_decksandrumsandrockandroll_cover.jpg', 'DreamWorks Records', 'The original release of Decksandrumsandrockandroll features 13 tracks. Most tracks are instrumental pieces of big beat, breakbeat and trip-hop, sometimes with vocal samples. The exception is "History Repeating", which features vocals from veteran jazz singer Shirley Bassey. "On Her Majesty''s Secret Service" is a remake of the James Bond film''s theme, and is a collaboration with composer David Arnold and his orchestra. All tracks were produced by Will White and Alex Gifford. "Take California" was the first song to be used in an iPod advertising campaign, appearing in the first commercial for the original model. "History Repeating" was used in a Pantene Pro-V shampoo commercial. "Bang On" was featured in the Nintendo 64 game Wipeout 64. "On Her Majesty''s Secret Service" also featured in full on Tony Hawk''s prominent skateboarding movie titled "The End".', '', 26),
('Aerosmith', 'Get Your Wings', 1974, 'Rock', '598px-Aerosmith_-_Get_Your_Wings.jpg', 'Columbia', 'Same Old Song and Dance:\r\nBuilt around a blues riff Joe Perry came up with while sitting on his amp, Steven Tyler quickly came up with the verse riff.\r\n\r\n\r\nLord of the Thighs:\r\nAfter the band decided they needed one more song for the album, they locked themselves into their rehearsal room, and came up with this. The narrator is a pimp who recruits a young woman he sees on the street into prostitution. Tyler also plays the piano. Kramer&#039;s opening beat is very similar to the one he would tap out a year later in &quot;Walk This Way&quot;.\r\n\r\n\r\nWoman of the World:\r\nWritten by Steven Tyler and his former band, The Strangeurs.\r\n', '', 27),
('Portishead ', 'Portishead ', 1997, 'Electronic', 'Portishead_CD_album_cover.jpg', 'Go! Discs/London', 'The band was formed in 1991, by keyboardist/multi-instrumentalist Geoff Barrow and singer Beth Gibbons. Barrow had previously worked with two other trip hop artists from Bristol, Massive Attack and Tricky. They named the band after Barrow''s home town, Portishead.\r\n\r\nAfter releasing a short film (To Kill a Dead Man) and its accompanying music, Portishead signed a record deal with Go! Beat Records and their first album, Dummy, was released in 1994, and featured heavy contributions from guitarist Adrian Utley. In spite of the band''s aversion to press coverage, the album was successful in both Europe and the United States, spawning two hit singles, "Glory Box" and "Sour Times". Portishead has often been used as accompanying music in the media. Dummy won the 1995 Mercury Music Prize.\r\n\r\nTheir second album, Portishead, was released in 1997, and featured the single "All Mine". A live album featuring new orchestral arrangements of the group''s songs was recorded primarily at Roseland in New York City, and released in 1998. A video of the concert, released shortly afterwards, was well received. 1999 saw a cooperation with singer Tom Jones for a track on his album Reload.\r\n', '', 28),
('Charles Mingus ', 'Tijuana Moods', 1957, 'Jazz', 'Tijuana_Moods.jpg', 'RCA', 'Tijuana Moods is a 1962 album by Charles Mingus that was originally recorded in 1957. It was reissued in 1996 on CD as New Tijuana Moods with four alternate takes. At the time he considered it his greatest recording.', '', 29),
('Herbie Hancock', 'Man-Child', 1974, 'Jazz', 'MAN-CHILD.jpg', 'Columbia Records', 'Man-Child is the seventeenth album by Herbie Hancock. The album is arguably one of his most funk influenced albums and it represents his further departure from the "spacey, higher atmosphere jazz," as he referred to it, of his earlier career. Hancock uses more funk based rhythms around the hi-hat, and snare drum. The tracks are characterized by short, repeated riffs by both the rhythm section, horns accompaniment, and bass lines. Man-Child features less improvisation from the whole band and more concentrated grooves with brief solos from the horns and Hancock himself on synthesizer and Fender Rhodes pianoover-top of the repeated riffs. This album features the addition of electric guitar to his new sound, which he started only five years prior to this album with Fat Albert Rotunda. The guitarists featured on this album were Melvin "Wah Wah Watson" Rogin, Duane "Blackbird" McKnight and David T. Walker. Their extensive use of wah-wah pedal and accenting chords on the up-beat rather than the down-beat is what helps to give the album a distinct and funkier rhythm that is broken up by brief periods of stop-time where only the sustained chords are heard from the electric guitar with an open wah pedal. Furthermore the riffs are fast-paced and energetic with repeating patterns that combine with multiple voices (i.e. horns, piano, bass, synthesizer, guitar, brief vocal patterns from Stevie Wonder and Herbie Hancock, and drums/percussion). The horns section in "Hang Up Your Hang-Ups" plays repeated riffs in unison that are alternating answered by electric piano, synthesizer, and electric guitar in brief periods of call and response.\r\n', '', 30),
('John Coltrane', 'Blue Train', 1957, 'Jazz', 'Blue_Train.jpg', 'Blue Note', 'It is considered by many to be Coltrane''s first "true" solo album, as it is the first he recorded featuring musicians and songs entirely of his choosing. All of the compositions were written by Coltrane, save one ("I''m Old Fashioned", a Jerome Kern/Johnny Mercer standard). ', '', 31),
('Return to Forever', 'Where Have I Known You Before', 1974, 'Jazz', 'WhereHaveIKnownYouBefore.jpg', 'Polydor', 'The jazz-fusion supergroup featuring Chick Corea, Stanley Clarke and Al DiMeola\r\n\r\nThe underlying musical idea of the band is still to create &quot;space rock&quot; with long solos and some funky elements. However, important changes have happened in regard of the band&#039;s sound and line-up. Both keyboardist Chick Corea and bassist Stanley Clarke have now found their own well known trademark sounds', '', 32),
('Art Blakey and the Jazz Messengers', 'Moanin''', 1958, 'Jazz', 'Moanin_Art_Blakey.jpg', 'Blue Note', 'This was Blakey''s first album for Blue Note in several years, after a period of recording for a miscellany of labels, and marked both a homecoming and a fresh start. Originally the LP was self-titled, but the instant popularity of the funky opening track "Moanin''" (by pianist Bobby Timmons) led to its becoming known by that title.', '', 33),
('Bill Evans', 'Everybody Digs Bill Evans', 1958, 'Jazz', 'Everybody_Digs_Bill_Evans.jpg', 'Riverside', 'Everybody Digs Bill Evans is a 1958 (see 1958 in music) album by jazz musician Bill Evans. It was the artist''s second album, done two years after his first record as a leader. Even though his producer tried to encourage him to record again sooner, Evans felt he had "nothing new to say" before this album. It contains three Evans compositions, including one of his most famous, "Peace Piece", a two-chord improvisation which many consider a forerunner of what became known later as "New Age" music.', '', 34),
('The Handsome Beasts', 'The Handsome Beasts', 1984, 'Rock', 'beasts.jpg', 'Decca', 'WOW. All their hits in one place!', '', 35),
('Coldplay', 'Viva la Vida or Death', 2001, 'Rock', 'VivaLaVida.jpg', 'Parlophone', 'Viva la Vida or Death and All His Friends (also simply known as Viva la Vida) is the fourth studio album by English alternative rock band Coldplay. It was released on 11 June 2008 in Japan,[1] 12 June 2008 in the United Kingdom and on 17 June 2008 in North America. In May 2008, Coldplay released two successful singles from the record: \\"Violet Hill\\" and \\"Viva la Vida\\", the latter becoming the band\\''s first song to reach number one in the United States and the United Kingdom. As of the end of August 2008, more than 5 million copies have been sold worldwide.', '', 36),
('Evanescence', 'Fallen', 2003, 'Rock', 'EvFallencover01.jpg', 'Wind-up', 'Fallen is the first full-length album by American alternative metal band Evanescence.\r\n\r\nIt was released on the Wind-up Records label, and was their first album to be released worldwide.', 'everybodysfool.mp3', 37);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
