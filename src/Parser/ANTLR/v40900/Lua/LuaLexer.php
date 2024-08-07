<?php

/*
 * Generated from /home/renaud/Projects/ns-php-data/resources/antlr/Lua/Lua.g4 by ANTLR 4.9.3
 */

namespace NoreSources\Data\Parser\ANTLR\v40900\Lua {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class LuaLexer extends Lexer
	{
		public const SEMI = 1, EQ = 2, COMMA = 3, RETURN = 4, NIL = 5, FALSE = 6, 
               TRUE = 7, DOT = 8, OP = 9, CP = 10, OCU = 11, CCU = 12, OB = 13, 
               CB = 14, DD = 15, NAME = 16, NORMALSTRING = 17, CHARSTRING = 18, 
               LONGSTRING = 19, INT = 20, HEX = 21, FLOAT = 22, HEX_FLOAT = 23, 
               LINE_COMMENT = 24, BLOCK_COMMENT = 25, COMMENT = 26, WS = 27, 
               NL = 28;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'SEMI', 'EQ', 'COMMA', 'RETURN', 'NIL', 'FALSE', 'TRUE', 'DOT', 'OP', 
			'CP', 'OCU', 'CCU', 'OB', 'CB', 'DD', 'NAME', 'NORMALSTRING', 'CHARSTRING', 
			'LONGSTRING', 'NESTED_STR', 'INT', 'HEX', 'FLOAT', 'HEX_FLOAT', 'ExponentPart', 
			'HexExponentPart', 'EscapeSequence', 'DecimalEscape', 'HexEscape', 'UtfEscape', 
			'Digit', 'HexDigit', 'SingleLineInputCharacter', 'LINE_COMMENT', 'BLOCK_COMMENT', 
			'COMMENT', 'WS', 'NL'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "';'", "'='", "','", "'return'", "'nil'", "'false'", "'true'", 
		    "'.'", "'('", "')'", "'{'", "'}'", "'['", "']'", "'..'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "SEMI", "EQ", "COMMA", "RETURN", "NIL", "FALSE", "TRUE", "DOT", 
		    "OP", "CP", "OCU", "CCU", "OB", "CB", "DD", "NAME", "NORMALSTRING", 
		    "CHARSTRING", "LONGSTRING", "INT", "HEX", "FLOAT", "HEX_FLOAT", "LINE_COMMENT", 
		    "BLOCK_COMMENT", "COMMENT", "WS", "NL"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{2}\u{1E}\u{16C}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}" .
		    "\u{9}\u{A}\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}" .
		    "\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}" .
		    "\u{4}\u{11}\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}" .
		    "\u{4}\u{14}\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}" .
		    "\u{4}\u{17}\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}" .
		    "\u{4}\u{1A}\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}" .
		    "\u{4}\u{1D}\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}" .
		    "\u{4}\u{20}\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}" .
		    "\u{4}\u{23}\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}" .
		    "\u{4}\u{26}\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}" .
		    "\u{3}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}" .
		    "\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}" .
		    "\u{3}\u{C}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}" .
		    "\u{F}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{7}" .
		    "\u{11}\u{7F}\u{A}\u{11}\u{C}\u{11}\u{E}\u{11}\u{82}\u{B}\u{11}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{3}\u{12}\u{7}\u{12}\u{87}\u{A}\u{12}\u{C}\u{12}" .
		    "\u{E}\u{12}\u{8A}\u{B}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{13}\u{3}" .
		    "\u{13}\u{3}\u{13}\u{7}\u{13}\u{91}\u{A}\u{13}\u{C}\u{13}\u{E}\u{13}" .
		    "\u{94}\u{B}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{14}\u{3}\u{14}\u{3}" .
		    "\u{14}\u{3}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}" .
		    "\u{15}\u{3}\u{15}\u{7}\u{15}\u{A2}\u{A}\u{15}\u{C}\u{15}\u{E}\u{15}" .
		    "\u{A5}\u{B}\u{15}\u{3}\u{15}\u{5}\u{15}\u{A8}\u{A}\u{15}\u{3}\u{16}" .
		    "\u{6}\u{16}\u{AB}\u{A}\u{16}\u{D}\u{16}\u{E}\u{16}\u{AC}\u{3}\u{17}" .
		    "\u{3}\u{17}\u{3}\u{17}\u{6}\u{17}\u{B2}\u{A}\u{17}\u{D}\u{17}\u{E}" .
		    "\u{17}\u{B3}\u{3}\u{18}\u{6}\u{18}\u{B7}\u{A}\u{18}\u{D}\u{18}\u{E}" .
		    "\u{18}\u{B8}\u{3}\u{18}\u{3}\u{18}\u{7}\u{18}\u{BD}\u{A}\u{18}\u{C}" .
		    "\u{18}\u{E}\u{18}\u{C0}\u{B}\u{18}\u{3}\u{18}\u{5}\u{18}\u{C3}\u{A}" .
		    "\u{18}\u{3}\u{18}\u{3}\u{18}\u{6}\u{18}\u{C7}\u{A}\u{18}\u{D}\u{18}" .
		    "\u{E}\u{18}\u{C8}\u{3}\u{18}\u{5}\u{18}\u{CC}\u{A}\u{18}\u{3}\u{18}" .
		    "\u{6}\u{18}\u{CF}\u{A}\u{18}\u{D}\u{18}\u{E}\u{18}\u{D0}\u{3}\u{18}" .
		    "\u{3}\u{18}\u{5}\u{18}\u{D5}\u{A}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}" .
		    "\u{19}\u{6}\u{19}\u{DA}\u{A}\u{19}\u{D}\u{19}\u{E}\u{19}\u{DB}\u{3}" .
		    "\u{19}\u{3}\u{19}\u{7}\u{19}\u{E0}\u{A}\u{19}\u{C}\u{19}\u{E}\u{19}" .
		    "\u{E3}\u{B}\u{19}\u{3}\u{19}\u{5}\u{19}\u{E6}\u{A}\u{19}\u{3}\u{19}" .
		    "\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{6}\u{19}\u{EC}\u{A}\u{19}\u{D}" .
		    "\u{19}\u{E}\u{19}\u{ED}\u{3}\u{19}\u{5}\u{19}\u{F1}\u{A}\u{19}\u{3}" .
		    "\u{19}\u{3}\u{19}\u{3}\u{19}\u{6}\u{19}\u{F6}\u{A}\u{19}\u{D}\u{19}" .
		    "\u{E}\u{19}\u{F7}\u{3}\u{19}\u{3}\u{19}\u{5}\u{19}\u{FC}\u{A}\u{19}" .
		    "\u{3}\u{1A}\u{3}\u{1A}\u{5}\u{1A}\u{100}\u{A}\u{1A}\u{3}\u{1A}\u{6}" .
		    "\u{1A}\u{103}\u{A}\u{1A}\u{D}\u{1A}\u{E}\u{1A}\u{104}\u{3}\u{1B}\u{3}" .
		    "\u{1B}\u{5}\u{1B}\u{109}\u{A}\u{1B}\u{3}\u{1B}\u{6}\u{1B}\u{10C}\u{A}" .
		    "\u{1B}\u{D}\u{1B}\u{E}\u{1B}\u{10D}\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1C}" .
		    "\u{3}\u{1C}\u{5}\u{1C}\u{114}\u{A}\u{1C}\u{3}\u{1C}\u{3}\u{1C}\u{3}" .
		    "\u{1C}\u{3}\u{1C}\u{5}\u{1C}\u{11A}\u{A}\u{1C}\u{3}\u{1D}\u{3}\u{1D}" .
		    "\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}" .
		    "\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{5}\u{1D}\u{127}\u{A}\u{1D}\u{3}" .
		    "\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}" .
		    "\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{6}\u{1F}\u{133}\u{A}\u{1F}" .
		    "\u{D}\u{1F}\u{E}\u{1F}\u{134}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{20}\u{3}" .
		    "\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{22}\u{3}\u{22}\u{3}\u{23}\u{3}" .
		    "\u{23}\u{3}\u{23}\u{3}\u{23}\u{7}\u{23}\u{143}\u{A}\u{23}\u{C}\u{23}" .
		    "\u{E}\u{23}\u{146}\u{B}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{24}\u{3}" .
		    "\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{7}\u{24}\u{150}" .
		    "\u{A}\u{24}\u{C}\u{24}\u{E}\u{24}\u{153}\u{B}\u{24}\u{3}\u{24}\u{3}" .
		    "\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}" .
		    "\u{25}\u{3}\u{25}\u{5}\u{25}\u{15E}\u{A}\u{25}\u{3}\u{25}\u{3}\u{25}" .
		    "\u{3}\u{26}\u{6}\u{26}\u{163}\u{A}\u{26}\u{D}\u{26}\u{E}\u{26}\u{164}" .
		    "\u{3}\u{26}\u{3}\u{26}\u{3}\u{27}\u{3}\u{27}\u{3}\u{27}\u{3}\u{27}" .
		    "\u{4}\u{A3}\u{151}\u{2}\u{28}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}" .
		    "\u{B}\u{7}\u{D}\u{8}\u{F}\u{9}\u{11}\u{A}\u{13}\u{B}\u{15}\u{C}\u{17}" .
		    "\u{D}\u{19}\u{E}\u{1B}\u{F}\u{1D}\u{10}\u{1F}\u{11}\u{21}\u{12}\u{23}" .
		    "\u{13}\u{25}\u{14}\u{27}\u{15}\u{29}\u{2}\u{2B}\u{16}\u{2D}\u{17}" .
		    "\u{2F}\u{18}\u{31}\u{19}\u{33}\u{2}\u{35}\u{2}\u{37}\u{2}\u{39}\u{2}" .
		    "\u{3B}\u{2}\u{3D}\u{2}\u{3F}\u{2}\u{41}\u{2}\u{43}\u{2}\u{45}\u{1A}" .
		    "\u{47}\u{1B}\u{49}\u{1C}\u{4B}\u{1D}\u{4D}\u{1E}\u{3}\u{2}\u{12}\u{5}" .
		    "\u{2}\u{43}\u{5C}\u{61}\u{61}\u{63}\u{7C}\u{6}\u{2}\u{32}\u{3B}\u{43}" .
		    "\u{5C}\u{61}\u{61}\u{63}\u{7C}\u{4}\u{2}\u{24}\u{24}\u{5E}\u{5E}\u{4}" .
		    "\u{2}\u{29}\u{29}\u{5E}\u{5E}\u{4}\u{2}\u{5A}\u{5A}\u{7A}\u{7A}\u{4}" .
		    "\u{2}\u{47}\u{47}\u{67}\u{67}\u{4}\u{2}\u{2D}\u{2D}\u{2F}\u{2F}\u{4}" .
		    "\u{2}\u{52}\u{52}\u{72}\u{72}\u{D}\u{2}\u{24}\u{26}\u{29}\u{29}\u{5E}" .
		    "\u{5E}\u{63}\u{64}\u{68}\u{68}\u{70}\u{70}\u{74}\u{74}\u{76}\u{76}" .
		    "\u{78}\u{78}\u{7C}\u{7C}\u{7E}\u{7E}\u{3}\u{2}\u{32}\u{34}\u{3}\u{2}" .
		    "\u{32}\u{3B}\u{5}\u{2}\u{32}\u{3B}\u{43}\u{48}\u{63}\u{68}\u{6}\u{2}" .
		    "\u{C}\u{C}\u{F}\u{F}\u{87}\u{87}\u{202A}\u{202B}\u{4}\u{2}\u{C}\u{C}" .
		    "\u{F}\u{F}\u{5}\u{2}\u{B}\u{B}\u{E}\u{F}\u{22}\u{22}\u{3}\u{2}\u{C}" .
		    "\u{C}\u{2}\u{18A}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{13}\u{3}\u{2}\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}\u{2}\u{17}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{19}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{21}\u{3}\u{2}\u{2}\u{2}\u{2}\u{23}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{25}\u{3}\u{2}\u{2}\u{2}\u{2}\u{27}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{2F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{31}\u{3}\u{2}\u{2}\u{2}\u{2}\u{45}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{47}\u{3}\u{2}\u{2}\u{2}\u{2}\u{49}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{4D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{3}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{5}\u{51}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{7}\u{53}\u{3}\u{2}\u{2}\u{2}\u{9}\u{55}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{D}\u{60}\u{3}\u{2}\u{2}\u{2}\u{F}" .
		    "\u{66}\u{3}\u{2}\u{2}\u{2}\u{11}\u{6B}\u{3}\u{2}\u{2}\u{2}\u{13}\u{6D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{17}\u{71}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{19}\u{73}\u{3}\u{2}\u{2}\u{2}\u{1B}\u{75}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1D}\u{77}\u{3}\u{2}\u{2}\u{2}\u{1F}\u{79}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{21}\u{7C}\u{3}\u{2}\u{2}\u{2}\u{23}\u{83}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{25}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{27}\u{97}\u{3}\u{2}\u{2}\u{2}\u{29}" .
		    "\u{A7}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{AA}\u{3}\u{2}\u{2}\u{2}\u{2D}\u{AE}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{31}\u{FB}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{33}\u{FD}\u{3}\u{2}\u{2}\u{2}\u{35}\u{106}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{37}\u{119}\u{3}\u{2}\u{2}\u{2}\u{39}\u{126}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3B}\u{128}\u{3}\u{2}\u{2}\u{2}\u{3D}\u{12D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3F}\u{138}\u{3}\u{2}\u{2}\u{2}\u{41}\u{13A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{43}\u{13C}\u{3}\u{2}\u{2}\u{2}\u{45}\u{13E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{47}\u{149}\u{3}\u{2}\u{2}\u{2}\u{49}\u{15D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{4B}\u{162}\u{3}\u{2}\u{2}\u{2}\u{4D}\u{168}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{4F}\u{50}\u{7}\u{3D}\u{2}\u{2}\u{50}\u{4}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{51}\u{52}\u{7}\u{3F}\u{2}\u{2}\u{52}\u{6}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{53}\u{54}\u{7}\u{2E}\u{2}\u{2}\u{54}\u{8}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{55}\u{56}\u{7}\u{74}\u{2}\u{2}\u{56}\u{57}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{57}\u{58}\u{7}\u{76}\u{2}\u{2}\u{58}\u{59}\u{7}\u{77}\u{2}\u{2}" .
		    "\u{59}\u{5A}\u{7}\u{74}\u{2}\u{2}\u{5A}\u{5B}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{5B}\u{A}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{5D}\u{7}\u{70}\u{2}\u{2}\u{5D}" .
		    "\u{5E}\u{7}\u{6B}\u{2}\u{2}\u{5E}\u{5F}\u{7}\u{6E}\u{2}\u{2}\u{5F}" .
		    "\u{C}\u{3}\u{2}\u{2}\u{2}\u{60}\u{61}\u{7}\u{68}\u{2}\u{2}\u{61}\u{62}" .
		    "\u{7}\u{63}\u{2}\u{2}\u{62}\u{63}\u{7}\u{6E}\u{2}\u{2}\u{63}\u{64}" .
		    "\u{7}\u{75}\u{2}\u{2}\u{64}\u{65}\u{7}\u{67}\u{2}\u{2}\u{65}\u{E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{66}\u{67}\u{7}\u{76}\u{2}\u{2}\u{67}\u{68}" .
		    "\u{7}\u{74}\u{2}\u{2}\u{68}\u{69}\u{7}\u{77}\u{2}\u{2}\u{69}\u{6A}" .
		    "\u{7}\u{67}\u{2}\u{2}\u{6A}\u{10}\u{3}\u{2}\u{2}\u{2}\u{6B}\u{6C}" .
		    "\u{7}\u{30}\u{2}\u{2}\u{6C}\u{12}\u{3}\u{2}\u{2}\u{2}\u{6D}\u{6E}" .
		    "\u{7}\u{2A}\u{2}\u{2}\u{6E}\u{14}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{70}" .
		    "\u{7}\u{2B}\u{2}\u{2}\u{70}\u{16}\u{3}\u{2}\u{2}\u{2}\u{71}\u{72}" .
		    "\u{7}\u{7D}\u{2}\u{2}\u{72}\u{18}\u{3}\u{2}\u{2}\u{2}\u{73}\u{74}" .
		    "\u{7}\u{7F}\u{2}\u{2}\u{74}\u{1A}\u{3}\u{2}\u{2}\u{2}\u{75}\u{76}" .
		    "\u{7}\u{5D}\u{2}\u{2}\u{76}\u{1C}\u{3}\u{2}\u{2}\u{2}\u{77}\u{78}" .
		    "\u{7}\u{5F}\u{2}\u{2}\u{78}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7A}" .
		    "\u{7}\u{30}\u{2}\u{2}\u{7A}\u{7B}\u{7}\u{30}\u{2}\u{2}\u{7B}\u{20}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7C}\u{80}\u{9}\u{2}\u{2}\u{2}\u{7D}\u{7F}\u{9}" .
		    "\u{3}\u{2}\u{2}\u{7E}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{7F}\u{82}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{80}\u{7E}\u{3}\u{2}\u{2}\u{2}\u{80}\u{81}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{81}\u{22}\u{3}\u{2}\u{2}\u{2}\u{82}\u{80}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{83}\u{88}\u{7}\u{24}\u{2}\u{2}\u{84}\u{87}\u{5}\u{37}\u{1C}\u{2}" .
		    "\u{85}\u{87}\u{A}\u{4}\u{2}\u{2}\u{86}\u{84}\u{3}\u{2}\u{2}\u{2}\u{86}" .
		    "\u{85}\u{3}\u{2}\u{2}\u{2}\u{87}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{88}\u{86}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{88}\u{89}\u{3}\u{2}\u{2}\u{2}\u{89}\u{8B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8A}\u{88}\u{3}\u{2}\u{2}\u{2}\u{8B}\u{8C}\u{7}\u{24}" .
		    "\u{2}\u{2}\u{8C}\u{24}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{92}\u{7}\u{29}" .
		    "\u{2}\u{2}\u{8E}\u{91}\u{5}\u{37}\u{1C}\u{2}\u{8F}\u{91}\u{A}\u{5}" .
		    "\u{2}\u{2}\u{90}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{90}\u{8F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{91}\u{94}\u{3}\u{2}\u{2}\u{2}\u{92}\u{90}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{92}\u{93}\u{3}\u{2}\u{2}\u{2}\u{93}\u{95}\u{3}\u{2}\u{2}\u{2}\u{94}" .
		    "\u{92}\u{3}\u{2}\u{2}\u{2}\u{95}\u{96}\u{7}\u{29}\u{2}\u{2}\u{96}" .
		    "\u{26}\u{3}\u{2}\u{2}\u{2}\u{97}\u{98}\u{7}\u{5D}\u{2}\u{2}\u{98}" .
		    "\u{99}\u{5}\u{29}\u{15}\u{2}\u{99}\u{9A}\u{7}\u{5F}\u{2}\u{2}\u{9A}" .
		    "\u{28}\u{3}\u{2}\u{2}\u{2}\u{9B}\u{9C}\u{7}\u{3F}\u{2}\u{2}\u{9C}" .
		    "\u{9D}\u{5}\u{29}\u{15}\u{2}\u{9D}\u{9E}\u{7}\u{3F}\u{2}\u{2}\u{9E}" .
		    "\u{A8}\u{3}\u{2}\u{2}\u{2}\u{9F}\u{A3}\u{7}\u{5D}\u{2}\u{2}\u{A0}" .
		    "\u{A2}\u{B}\u{2}\u{2}\u{2}\u{A1}\u{A0}\u{3}\u{2}\u{2}\u{2}\u{A2}\u{A5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A1}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A4}\u{A6}\u{3}\u{2}\u{2}\u{2}\u{A5}\u{A3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A6}\u{A8}\u{7}\u{5F}\u{2}\u{2}\u{A7}\u{9B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A7}\u{9F}\u{3}\u{2}\u{2}\u{2}\u{A8}\u{2A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A9}\u{AB}\u{5}\u{3F}\u{20}\u{2}\u{AA}\u{A9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{AB}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AA}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{AC}\u{AD}\u{3}\u{2}\u{2}\u{2}\u{AD}\u{2C}\u{3}\u{2}\u{2}\u{2}\u{AE}" .
		    "\u{AF}\u{7}\u{32}\u{2}\u{2}\u{AF}\u{B1}\u{9}\u{6}\u{2}\u{2}\u{B0}" .
		    "\u{B2}\u{5}\u{41}\u{21}\u{2}\u{B1}\u{B0}\u{3}\u{2}\u{2}\u{2}\u{B2}" .
		    "\u{B3}\u{3}\u{2}\u{2}\u{2}\u{B3}\u{B1}\u{3}\u{2}\u{2}\u{2}\u{B3}\u{B4}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{B4}\u{2E}\u{3}\u{2}\u{2}\u{2}\u{B5}\u{B7}\u{5}" .
		    "\u{3F}\u{20}\u{2}\u{B6}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B7}\u{B8}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{B8}\u{B6}\u{3}\u{2}\u{2}\u{2}\u{B8}\u{B9}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B9}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{BE}\u{7}\u{30}" .
		    "\u{2}\u{2}\u{BB}\u{BD}\u{5}\u{3F}\u{20}\u{2}\u{BC}\u{BB}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{BD}\u{C0}\u{3}\u{2}\u{2}\u{2}\u{BE}\u{BC}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{BE}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{BF}\u{C2}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C0}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{C3}\u{5}\u{33}\u{1A}\u{2}" .
		    "\u{C2}\u{C1}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{C3}" .
		    "\u{D5}\u{3}\u{2}\u{2}\u{2}\u{C4}\u{C6}\u{7}\u{30}\u{2}\u{2}\u{C5}" .
		    "\u{C7}\u{5}\u{3F}\u{20}\u{2}\u{C6}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{C7}" .
		    "\u{C8}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{C6}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{C9}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C9}\u{CB}\u{3}\u{2}\u{2}\u{2}\u{CA}\u{CC}\u{5}" .
		    "\u{33}\u{1A}\u{2}\u{CB}\u{CA}\u{3}\u{2}\u{2}\u{2}\u{CB}\u{CC}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{CC}\u{D5}\u{3}\u{2}\u{2}\u{2}\u{CD}\u{CF}\u{5}\u{3F}" .
		    "\u{20}\u{2}\u{CE}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{CF}\u{D0}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{D0}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{D1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D1}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D3}\u{5}\u{33}\u{1A}" .
		    "\u{2}\u{D3}\u{D5}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{B6}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D4}\u{C4}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{D5}" .
		    "\u{30}\u{3}\u{2}\u{2}\u{2}\u{D6}\u{D7}\u{7}\u{32}\u{2}\u{2}\u{D7}" .
		    "\u{D9}\u{9}\u{6}\u{2}\u{2}\u{D8}\u{DA}\u{5}\u{41}\u{21}\u{2}\u{D9}" .
		    "\u{D8}\u{3}\u{2}\u{2}\u{2}\u{DA}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{DB}\u{D9}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{DB}\u{DC}\u{3}\u{2}\u{2}\u{2}\u{DC}\u{DD}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{DD}\u{E1}\u{7}\u{30}\u{2}\u{2}\u{DE}\u{E0}\u{5}" .
		    "\u{41}\u{21}\u{2}\u{DF}\u{DE}\u{3}\u{2}\u{2}\u{2}\u{E0}\u{E3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{E1}\u{DF}\u{3}\u{2}\u{2}\u{2}\u{E1}\u{E2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{E2}\u{E5}\u{3}\u{2}\u{2}\u{2}\u{E3}\u{E1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E4}\u{E6}\u{5}\u{35}\u{1B}\u{2}\u{E5}\u{E4}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E5}\u{E6}\u{3}\u{2}\u{2}\u{2}\u{E6}\u{FC}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E7}\u{E8}\u{7}\u{32}\u{2}\u{2}\u{E8}\u{E9}\u{9}\u{6}\u{2}\u{2}" .
		    "\u{E9}\u{EB}\u{7}\u{30}\u{2}\u{2}\u{EA}\u{EC}\u{5}\u{41}\u{21}\u{2}" .
		    "\u{EB}\u{EA}\u{3}\u{2}\u{2}\u{2}\u{EC}\u{ED}\u{3}\u{2}\u{2}\u{2}\u{ED}" .
		    "\u{EB}\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EE}\u{3}\u{2}\u{2}\u{2}\u{EE}\u{F0}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{EF}\u{F1}\u{5}\u{35}\u{1B}\u{2}\u{F0}\u{EF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F0}\u{F1}\u{3}\u{2}\u{2}\u{2}\u{F1}\u{FC}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F2}\u{F3}\u{7}\u{32}\u{2}\u{2}\u{F3}\u{F5}\u{9}" .
		    "\u{6}\u{2}\u{2}\u{F4}\u{F6}\u{5}\u{41}\u{21}\u{2}\u{F5}\u{F4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F6}\u{F7}\u{3}\u{2}\u{2}\u{2}\u{F7}\u{F5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{F7}\u{F8}\u{3}\u{2}\u{2}\u{2}\u{F8}\u{F9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{F9}\u{FA}\u{5}\u{35}\u{1B}\u{2}\u{FA}\u{FC}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{FB}\u{D6}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{E7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{FB}\u{F2}\u{3}\u{2}\u{2}\u{2}\u{FC}\u{32}\u{3}\u{2}\u{2}\u{2}\u{FD}" .
		    "\u{FF}\u{9}\u{7}\u{2}\u{2}\u{FE}\u{100}\u{9}\u{8}\u{2}\u{2}\u{FF}" .
		    "\u{FE}\u{3}\u{2}\u{2}\u{2}\u{FF}\u{100}\u{3}\u{2}\u{2}\u{2}\u{100}" .
		    "\u{102}\u{3}\u{2}\u{2}\u{2}\u{101}\u{103}\u{5}\u{3F}\u{20}\u{2}\u{102}" .
		    "\u{101}\u{3}\u{2}\u{2}\u{2}\u{103}\u{104}\u{3}\u{2}\u{2}\u{2}\u{104}" .
		    "\u{102}\u{3}\u{2}\u{2}\u{2}\u{104}\u{105}\u{3}\u{2}\u{2}\u{2}\u{105}" .
		    "\u{34}\u{3}\u{2}\u{2}\u{2}\u{106}\u{108}\u{9}\u{9}\u{2}\u{2}\u{107}" .
		    "\u{109}\u{9}\u{8}\u{2}\u{2}\u{108}\u{107}\u{3}\u{2}\u{2}\u{2}\u{108}" .
		    "\u{109}\u{3}\u{2}\u{2}\u{2}\u{109}\u{10B}\u{3}\u{2}\u{2}\u{2}\u{10A}" .
		    "\u{10C}\u{5}\u{3F}\u{20}\u{2}\u{10B}\u{10A}\u{3}\u{2}\u{2}\u{2}\u{10C}" .
		    "\u{10D}\u{3}\u{2}\u{2}\u{2}\u{10D}\u{10B}\u{3}\u{2}\u{2}\u{2}\u{10D}" .
		    "\u{10E}\u{3}\u{2}\u{2}\u{2}\u{10E}\u{36}\u{3}\u{2}\u{2}\u{2}\u{10F}" .
		    "\u{110}\u{7}\u{5E}\u{2}\u{2}\u{110}\u{11A}\u{9}\u{A}\u{2}\u{2}\u{111}" .
		    "\u{113}\u{7}\u{5E}\u{2}\u{2}\u{112}\u{114}\u{7}\u{F}\u{2}\u{2}\u{113}" .
		    "\u{112}\u{3}\u{2}\u{2}\u{2}\u{113}\u{114}\u{3}\u{2}\u{2}\u{2}\u{114}" .
		    "\u{115}\u{3}\u{2}\u{2}\u{2}\u{115}\u{11A}\u{7}\u{C}\u{2}\u{2}\u{116}" .
		    "\u{11A}\u{5}\u{39}\u{1D}\u{2}\u{117}\u{11A}\u{5}\u{3B}\u{1E}\u{2}" .
		    "\u{118}\u{11A}\u{5}\u{3D}\u{1F}\u{2}\u{119}\u{10F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{119}\u{111}\u{3}\u{2}\u{2}\u{2}\u{119}\u{116}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{119}\u{117}\u{3}\u{2}\u{2}\u{2}\u{119}\u{118}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{11A}\u{38}\u{3}\u{2}\u{2}\u{2}\u{11B}\u{11C}\u{7}\u{5E}\u{2}" .
		    "\u{2}\u{11C}\u{127}\u{5}\u{3F}\u{20}\u{2}\u{11D}\u{11E}\u{7}\u{5E}" .
		    "\u{2}\u{2}\u{11E}\u{11F}\u{5}\u{3F}\u{20}\u{2}\u{11F}\u{120}\u{5}" .
		    "\u{3F}\u{20}\u{2}\u{120}\u{127}\u{3}\u{2}\u{2}\u{2}\u{121}\u{122}" .
		    "\u{7}\u{5E}\u{2}\u{2}\u{122}\u{123}\u{9}\u{B}\u{2}\u{2}\u{123}\u{124}" .
		    "\u{5}\u{3F}\u{20}\u{2}\u{124}\u{125}\u{5}\u{3F}\u{20}\u{2}\u{125}" .
		    "\u{127}\u{3}\u{2}\u{2}\u{2}\u{126}\u{11B}\u{3}\u{2}\u{2}\u{2}\u{126}" .
		    "\u{11D}\u{3}\u{2}\u{2}\u{2}\u{126}\u{121}\u{3}\u{2}\u{2}\u{2}\u{127}" .
		    "\u{3A}\u{3}\u{2}\u{2}\u{2}\u{128}\u{129}\u{7}\u{5E}\u{2}\u{2}\u{129}" .
		    "\u{12A}\u{7}\u{7A}\u{2}\u{2}\u{12A}\u{12B}\u{5}\u{41}\u{21}\u{2}\u{12B}" .
		    "\u{12C}\u{5}\u{41}\u{21}\u{2}\u{12C}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{12D}" .
		    "\u{12E}\u{7}\u{5E}\u{2}\u{2}\u{12E}\u{12F}\u{7}\u{77}\u{2}\u{2}\u{12F}" .
		    "\u{130}\u{7}\u{7D}\u{2}\u{2}\u{130}\u{132}\u{3}\u{2}\u{2}\u{2}\u{131}" .
		    "\u{133}\u{5}\u{41}\u{21}\u{2}\u{132}\u{131}\u{3}\u{2}\u{2}\u{2}\u{133}" .
		    "\u{134}\u{3}\u{2}\u{2}\u{2}\u{134}\u{132}\u{3}\u{2}\u{2}\u{2}\u{134}" .
		    "\u{135}\u{3}\u{2}\u{2}\u{2}\u{135}\u{136}\u{3}\u{2}\u{2}\u{2}\u{136}" .
		    "\u{137}\u{7}\u{7F}\u{2}\u{2}\u{137}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{138}" .
		    "\u{139}\u{9}\u{C}\u{2}\u{2}\u{139}\u{40}\u{3}\u{2}\u{2}\u{2}\u{13A}" .
		    "\u{13B}\u{9}\u{D}\u{2}\u{2}\u{13B}\u{42}\u{3}\u{2}\u{2}\u{2}\u{13C}" .
		    "\u{13D}\u{A}\u{E}\u{2}\u{2}\u{13D}\u{44}\u{3}\u{2}\u{2}\u{2}\u{13E}" .
		    "\u{13F}\u{7}\u{2F}\u{2}\u{2}\u{13F}\u{140}\u{7}\u{2F}\u{2}\u{2}\u{140}" .
		    "\u{144}\u{3}\u{2}\u{2}\u{2}\u{141}\u{143}\u{A}\u{F}\u{2}\u{2}\u{142}" .
		    "\u{141}\u{3}\u{2}\u{2}\u{2}\u{143}\u{146}\u{3}\u{2}\u{2}\u{2}\u{144}" .
		    "\u{142}\u{3}\u{2}\u{2}\u{2}\u{144}\u{145}\u{3}\u{2}\u{2}\u{2}\u{145}" .
		    "\u{147}\u{3}\u{2}\u{2}\u{2}\u{146}\u{144}\u{3}\u{2}\u{2}\u{2}\u{147}" .
		    "\u{148}\u{8}\u{23}\u{2}\u{2}\u{148}\u{46}\u{3}\u{2}\u{2}\u{2}\u{149}" .
		    "\u{14A}\u{7}\u{2F}\u{2}\u{2}\u{14A}\u{14B}\u{7}\u{2F}\u{2}\u{2}\u{14B}" .
		    "\u{14C}\u{7}\u{5D}\u{2}\u{2}\u{14C}\u{14D}\u{7}\u{5D}\u{2}\u{2}\u{14D}" .
		    "\u{151}\u{3}\u{2}\u{2}\u{2}\u{14E}\u{150}\u{B}\u{2}\u{2}\u{2}\u{14F}" .
		    "\u{14E}\u{3}\u{2}\u{2}\u{2}\u{150}\u{153}\u{3}\u{2}\u{2}\u{2}\u{151}" .
		    "\u{152}\u{3}\u{2}\u{2}\u{2}\u{151}\u{14F}\u{3}\u{2}\u{2}\u{2}\u{152}" .
		    "\u{154}\u{3}\u{2}\u{2}\u{2}\u{153}\u{151}\u{3}\u{2}\u{2}\u{2}\u{154}" .
		    "\u{155}\u{7}\u{2F}\u{2}\u{2}\u{155}\u{156}\u{7}\u{2F}\u{2}\u{2}\u{156}" .
		    "\u{157}\u{7}\u{5F}\u{2}\u{2}\u{157}\u{158}\u{7}\u{5F}\u{2}\u{2}\u{158}" .
		    "\u{159}\u{3}\u{2}\u{2}\u{2}\u{159}\u{15A}\u{8}\u{24}\u{2}\u{2}\u{15A}" .
		    "\u{48}\u{3}\u{2}\u{2}\u{2}\u{15B}\u{15E}\u{5}\u{45}\u{23}\u{2}\u{15C}" .
		    "\u{15E}\u{5}\u{47}\u{24}\u{2}\u{15D}\u{15B}\u{3}\u{2}\u{2}\u{2}\u{15D}" .
		    "\u{15C}\u{3}\u{2}\u{2}\u{2}\u{15E}\u{15F}\u{3}\u{2}\u{2}\u{2}\u{15F}" .
		    "\u{160}\u{8}\u{25}\u{2}\u{2}\u{160}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{161}" .
		    "\u{163}\u{9}\u{10}\u{2}\u{2}\u{162}\u{161}\u{3}\u{2}\u{2}\u{2}\u{163}" .
		    "\u{164}\u{3}\u{2}\u{2}\u{2}\u{164}\u{162}\u{3}\u{2}\u{2}\u{2}\u{164}" .
		    "\u{165}\u{3}\u{2}\u{2}\u{2}\u{165}\u{166}\u{3}\u{2}\u{2}\u{2}\u{166}" .
		    "\u{167}\u{8}\u{26}\u{2}\u{2}\u{167}\u{4C}\u{3}\u{2}\u{2}\u{2}\u{168}" .
		    "\u{169}\u{9}\u{11}\u{2}\u{2}\u{169}\u{16A}\u{3}\u{2}\u{2}\u{2}\u{16A}" .
		    "\u{16B}\u{8}\u{27}\u{3}\u{2}\u{16B}\u{4E}\u{3}\u{2}\u{2}\u{2}\u{26}" .
		    "\u{2}\u{80}\u{86}\u{88}\u{90}\u{92}\u{A3}\u{A7}\u{AC}\u{B3}\u{B8}" .
		    "\u{BE}\u{C2}\u{C8}\u{CB}\u{D0}\u{D4}\u{DB}\u{E1}\u{E5}\u{ED}\u{F0}" .
		    "\u{F7}\u{FB}\u{FF}\u{104}\u{108}\u{10D}\u{113}\u{119}\u{126}\u{134}" .
		    "\u{144}\u{151}\u{15D}\u{164}\u{4}\u{2}\u{3}\u{2}\u{2}\u{4}\u{2}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9.3', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public static function vocabulary() : Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName() : string
		{
			return 'Lua.g4';
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames() : array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames() : array
		{
			return self::MODE_NAMES;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
		{
			return self::vocabulary();
		}
	}
}