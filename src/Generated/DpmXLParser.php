<?php

/*
 * Generated from ./dpm_xlParser.g4 by ANTLR 4.13.2
 */

namespace Artemeon\DpmXLParser\Generated {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class DpmXLParser extends Parser
	{
		public const BOOLEAN_LITERAL = 1, AND = 2, OR = 3, XOR = 4, NOT = 5, ASSIGN = 6, 
               PERSISTENT_ASSIGN = 7, EQ = 8, NE = 9, LT = 10, LE = 11, 
               GT = 12, GE = 13, MATCH = 14, WITH = 15, PLUS = 16, MINUS = 17, 
               MULT = 18, DIV = 19, MAX_AGGR = 20, MIN_AGGR = 21, SUM = 22, 
               COUNT = 23, AVG = 24, MEDIAN = 25, GROUP_BY = 26, ABS = 27, 
               ISNULL = 28, EXP = 29, LN = 30, SQRT = 31, POWER = 32, LOG = 33, 
               MAX = 34, MIN = 35, IN = 36, COMMA = 37, COLON = 38, LPAREN = 39, 
               RPAREN = 40, CURLY_BRACKET_LEFT = 41, CURLY_BRACKET_RIGHT = 42, 
               SQUARE_BRACKET_LEFT = 43, SQUARE_BRACKET_RIGHT = 44, IF = 45, 
               ENDIF = 46, THEN = 47, ELSE = 48, NVL = 49, FILTER = 50, 
               WHERE = 51, GET = 52, RENAME = 53, TO = 54, TIME_SHIFT = 55, 
               LEN = 56, CONCAT = 57, ROW_HEADING = 58, COL_HEADING = 59, 
               SHEET_HEADING = 60, TIME_PERIOD = 61, ITEM_SIGNATURE = 62, 
               EOL = 63, INTEGER_LITERAL = 64, DECIMAL_LITERAL = 65, PERCENT_LITERAL = 66, 
               STRING_LITERAL = 67, EMPTY_LITERAL = 68, CODE = 69, DATE_LITERAL = 70, 
               TIME_INTERVAL_LITERAL = 71, TIME_PERIOD_LITERAL = 72, WS = 73, 
               INTERVAL = 74, DEFAULT = 75, ROW = 76, ROW_RANGE = 77, ROW_ALL = 78, 
               COL = 79, COL_RANGE = 80, COL_ALL = 81, SHEET = 82, SHEET_RANGE = 83, 
               SHEET_ALL = 84, TABLE_REFERENCE = 85, TABLE_GROUP_REFERENCE = 86, 
               VAR_REFERENCE = 87, OPERATION_REFERENCE = 88, PRECONDITION_ELEMENT = 89, 
               SELECTION_MODE_WS = 90, SET_OPERAND_MODE_WS = 91;

		public const RULE_start = 0, RULE_statements = 1, RULE_statement = 2, 
               RULE_persistentExpression = 3, RULE_expressionWithoutAssignment = 4, 
               RULE_partialSelection = 5, RULE_temporaryAssignmentExpression = 6, 
               RULE_persistentAssignmentExpression = 7, RULE_expression = 8, 
               RULE_setOperand = 9, RULE_setElements = 10, RULE_functions = 11, 
               RULE_numericOperators = 12, RULE_comparisonFunctionOperators = 13, 
               RULE_filterOperators = 14, RULE_timeOperators = 15, RULE_conditionalOperators = 16, 
               RULE_stringOperators = 17, RULE_aggregateOperators = 18, 
               RULE_groupingClause = 19, RULE_itemSignature = 20, RULE_itemReference = 21, 
               RULE_rowElem = 22, RULE_colElem = 23, RULE_sheetElem = 24, 
               RULE_rowHandler = 25, RULE_colHandler = 26, RULE_sheetHandler = 27, 
               RULE_interval = 28, RULE_default = 29, RULE_argument = 30, 
               RULE_select = 31, RULE_selectOperand = 32, RULE_varID = 33, 
               RULE_cellRef = 34, RULE_preconditionElem = 35, RULE_varRef = 36, 
               RULE_operationRef = 37, RULE_cellAddress = 38, RULE_tableReference = 39, 
               RULE_clauseOperators = 40, RULE_renameClause = 41, RULE_comparisonOperators = 42, 
               RULE_literal = 43, RULE_keyNames = 44, RULE_propertyReference = 45, 
               RULE_propertyCode = 46, RULE_temporaryIdentifier = 47;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'start', 'statements', 'statement', 'persistentExpression', 'expressionWithoutAssignment', 
			'partialSelection', 'temporaryAssignmentExpression', 'persistentAssignmentExpression', 
			'expression', 'setOperand', 'setElements', 'functions', 'numericOperators', 
			'comparisonFunctionOperators', 'filterOperators', 'timeOperators', 'conditionalOperators', 
			'stringOperators', 'aggregateOperators', 'groupingClause', 'itemSignature', 
			'itemReference', 'rowElem', 'colElem', 'sheetElem', 'rowHandler', 'colHandler', 
			'sheetHandler', 'interval', 'default', 'argument', 'select', 'selectOperand', 
			'varID', 'cellRef', 'preconditionElem', 'varRef', 'operationRef', 'cellAddress', 
			'tableReference', 'clauseOperators', 'renameClause', 'comparisonOperators', 
			'literal', 'keyNames', 'propertyReference', 'propertyCode', 'temporaryIdentifier'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, "'and'", "'or'", "'xor'", "'not'", "':='", "'<-'", "'='", 
		    "'!='", "'<'", "'<='", "'>'", "'>='", "'match'", "'with'", "'+'", 
		    "'-'", "'*'", "'/'", "'max_aggr'", "'min_aggr'", "'sum'", "'count'", 
		    "'avg'", "'median'", "'group by'", "'abs'", "'isnull'", "'exp'", "'ln'", 
		    "'sqrt'", "'power'", "'log'", "'max'", "'min'", "'in'", "','", "':'", 
		    "'('", "')'", "'{'", "'}'", "'['", "']'", "'if'", "'endif'", "'then'", 
		    "'else'", "'nvl'", "'filter'", "'where'", "'get'", "'rename'", "'to'", 
		    "'time_shift'", "'len'", "'&'", "'r'", "'c'", "'s'", null, null, "';'", 
		    null, null, null, null, null, null, null, null, null, null, "'interval'", 
		    "'default'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "BOOLEAN_LITERAL", "AND", "OR", "XOR", "NOT", "ASSIGN", "PERSISTENT_ASSIGN", 
		    "EQ", "NE", "LT", "LE", "GT", "GE", "MATCH", "WITH", "PLUS", "MINUS", 
		    "MULT", "DIV", "MAX_AGGR", "MIN_AGGR", "SUM", "COUNT", "AVG", "MEDIAN", 
		    "GROUP_BY", "ABS", "ISNULL", "EXP", "LN", "SQRT", "POWER", "LOG", 
		    "MAX", "MIN", "IN", "COMMA", "COLON", "LPAREN", "RPAREN", "CURLY_BRACKET_LEFT", 
		    "CURLY_BRACKET_RIGHT", "SQUARE_BRACKET_LEFT", "SQUARE_BRACKET_RIGHT", 
		    "IF", "ENDIF", "THEN", "ELSE", "NVL", "FILTER", "WHERE", "GET", "RENAME", 
		    "TO", "TIME_SHIFT", "LEN", "CONCAT", "ROW_HEADING", "COL_HEADING", 
		    "SHEET_HEADING", "TIME_PERIOD", "ITEM_SIGNATURE", "EOL", "INTEGER_LITERAL", 
		    "DECIMAL_LITERAL", "PERCENT_LITERAL", "STRING_LITERAL", "EMPTY_LITERAL", 
		    "CODE", "DATE_LITERAL", "TIME_INTERVAL_LITERAL", "TIME_PERIOD_LITERAL", 
		    "WS", "INTERVAL", "DEFAULT", "ROW", "ROW_RANGE", "ROW_ALL", "COL", 
		    "COL_RANGE", "COL_ALL", "SHEET", "SHEET_RANGE", "SHEET_ALL", "TABLE_REFERENCE", 
		    "TABLE_GROUP_REFERENCE", "VAR_REFERENCE", "OPERATION_REFERENCE", "PRECONDITION_ELEMENT", 
		    "SELECTION_MODE_WS", "SET_OPERAND_MODE_WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 91, 468, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 2, 46, 7, 46, 2, 47, 7, 47, 
		    1, 0, 1, 0, 1, 0, 1, 0, 3, 0, 101, 8, 0, 3, 0, 103, 8, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 4, 1, 110, 8, 1, 11, 1, 12, 1, 111, 1, 2, 1, 
		    2, 3, 2, 116, 8, 2, 1, 3, 1, 3, 3, 3, 120, 8, 3, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 3, 4, 128, 8, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 
		    6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 3, 8, 161, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 
		    1, 8, 1, 8, 3, 8, 170, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 5, 8, 199, 
		    8, 8, 10, 8, 12, 8, 202, 9, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 10, 1, 10, 
		    1, 10, 5, 10, 211, 8, 10, 10, 10, 12, 10, 214, 9, 10, 1, 10, 1, 10, 
		    1, 10, 5, 10, 219, 8, 10, 10, 10, 12, 10, 222, 9, 10, 3, 10, 224, 
		    8, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 233, 
		    8, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 4, 12, 
		    252, 8, 12, 11, 12, 12, 12, 253, 1, 12, 1, 12, 3, 12, 258, 8, 12, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 3, 13, 272, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 
		    14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 3, 15, 290, 8, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    18, 1, 18, 1, 18, 1, 18, 3, 18, 310, 8, 18, 1, 18, 1, 18, 1, 19, 1, 
		    19, 1, 19, 1, 19, 5, 19, 318, 8, 19, 10, 19, 12, 19, 321, 9, 19, 1, 
		    20, 1, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 22, 1, 22, 1, 23, 1, 23, 
		    1, 24, 1, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 5, 25, 340, 8, 25, 
		    10, 25, 12, 25, 343, 9, 25, 1, 25, 3, 25, 346, 8, 25, 1, 26, 1, 26, 
		    1, 26, 1, 26, 1, 26, 5, 26, 353, 8, 26, 10, 26, 12, 26, 356, 9, 26, 
		    1, 26, 3, 26, 359, 8, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 5, 27, 
		    366, 8, 27, 10, 27, 12, 27, 369, 9, 27, 1, 27, 3, 27, 372, 8, 27, 
		    1, 28, 1, 28, 1, 28, 1, 28, 1, 29, 1, 29, 1, 29, 1, 29, 1, 30, 1, 
		    30, 1, 30, 1, 30, 1, 30, 3, 30, 387, 8, 30, 1, 31, 1, 31, 1, 31, 1, 
		    31, 1, 32, 1, 32, 1, 32, 1, 32, 3, 32, 397, 8, 32, 1, 33, 1, 33, 1, 
		    33, 1, 33, 1, 34, 1, 34, 1, 35, 1, 35, 1, 36, 1, 36, 1, 37, 1, 37, 
		    1, 38, 1, 38, 1, 38, 5, 38, 414, 8, 38, 10, 38, 12, 38, 417, 9, 38, 
		    1, 38, 1, 38, 1, 38, 5, 38, 422, 8, 38, 10, 38, 12, 38, 425, 9, 38, 
		    3, 38, 427, 8, 38, 1, 39, 1, 39, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 
		    1, 40, 1, 40, 1, 40, 5, 40, 439, 8, 40, 10, 40, 12, 40, 442, 9, 40, 
		    3, 40, 444, 8, 40, 1, 41, 1, 41, 1, 41, 1, 41, 1, 42, 1, 42, 1, 43, 
		    1, 43, 1, 44, 1, 44, 1, 44, 1, 44, 3, 44, 458, 8, 44, 1, 45, 1, 45, 
		    1, 45, 1, 45, 1, 46, 1, 46, 1, 47, 1, 47, 1, 47, 0, 1, 16, 48, 0, 
		    2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 
		    38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 
		    72, 74, 76, 78, 80, 82, 84, 86, 88, 90, 92, 94, 0, 13, 1, 0, 16, 17, 
		    1, 0, 18, 19, 1, 0, 3, 4, 2, 0, 27, 27, 29, 31, 1, 0, 32, 33, 1, 0, 
		    34, 35, 1, 0, 20, 25, 1, 0, 76, 78, 1, 0, 79, 81, 1, 0, 82, 84, 1, 
		    0, 85, 86, 1, 0, 8, 13, 3, 0, 1, 1, 64, 68, 70, 72, 481, 0, 96, 1, 
		    0, 0, 0, 2, 109, 1, 0, 0, 0, 4, 115, 1, 0, 0, 0, 6, 119, 1, 0, 0, 
		    0, 8, 127, 1, 0, 0, 0, 10, 129, 1, 0, 0, 0, 12, 133, 1, 0, 0, 0, 14, 
		    137, 1, 0, 0, 0, 16, 169, 1, 0, 0, 0, 18, 203, 1, 0, 0, 0, 20, 223, 
		    1, 0, 0, 0, 22, 232, 1, 0, 0, 0, 24, 257, 1, 0, 0, 0, 26, 271, 1, 
		    0, 0, 0, 28, 273, 1, 0, 0, 0, 30, 280, 1, 0, 0, 0, 32, 293, 1, 0, 
		    0, 0, 34, 300, 1, 0, 0, 0, 36, 305, 1, 0, 0, 0, 38, 313, 1, 0, 0, 
		    0, 40, 322, 1, 0, 0, 0, 42, 324, 1, 0, 0, 0, 44, 328, 1, 0, 0, 0, 
		    46, 330, 1, 0, 0, 0, 48, 332, 1, 0, 0, 0, 50, 345, 1, 0, 0, 0, 52, 
		    358, 1, 0, 0, 0, 54, 371, 1, 0, 0, 0, 56, 373, 1, 0, 0, 0, 58, 377, 
		    1, 0, 0, 0, 60, 386, 1, 0, 0, 0, 62, 388, 1, 0, 0, 0, 64, 396, 1, 
		    0, 0, 0, 66, 398, 1, 0, 0, 0, 68, 402, 1, 0, 0, 0, 70, 404, 1, 0, 
		    0, 0, 72, 406, 1, 0, 0, 0, 74, 408, 1, 0, 0, 0, 76, 426, 1, 0, 0, 
		    0, 78, 428, 1, 0, 0, 0, 80, 443, 1, 0, 0, 0, 82, 445, 1, 0, 0, 0, 
		    84, 449, 1, 0, 0, 0, 86, 451, 1, 0, 0, 0, 88, 457, 1, 0, 0, 0, 90, 
		    459, 1, 0, 0, 0, 92, 463, 1, 0, 0, 0, 94, 465, 1, 0, 0, 0, 96, 102, 
		    3, 4, 2, 0, 97, 98, 5, 63, 0, 0, 98, 103, 3, 2, 1, 0, 99, 101, 5, 
		    63, 0, 0, 100, 99, 1, 0, 0, 0, 100, 101, 1, 0, 0, 0, 101, 103, 1, 
		    0, 0, 0, 102, 97, 1, 0, 0, 0, 102, 100, 1, 0, 0, 0, 103, 104, 1, 0, 
		    0, 0, 104, 105, 5, 0, 0, 1, 105, 1, 1, 0, 0, 0, 106, 107, 3, 4, 2, 
		    0, 107, 108, 5, 63, 0, 0, 108, 110, 1, 0, 0, 0, 109, 106, 1, 0, 0, 
		    0, 110, 111, 1, 0, 0, 0, 111, 109, 1, 0, 0, 0, 111, 112, 1, 0, 0, 
		    0, 112, 3, 1, 0, 0, 0, 113, 116, 3, 8, 4, 0, 114, 116, 3, 12, 6, 0, 
		    115, 113, 1, 0, 0, 0, 115, 114, 1, 0, 0, 0, 116, 5, 1, 0, 0, 0, 117, 
		    120, 3, 14, 7, 0, 118, 120, 3, 8, 4, 0, 119, 117, 1, 0, 0, 0, 119, 
		    118, 1, 0, 0, 0, 120, 7, 1, 0, 0, 0, 121, 128, 3, 16, 8, 0, 122, 123, 
		    5, 15, 0, 0, 123, 124, 3, 10, 5, 0, 124, 125, 5, 38, 0, 0, 125, 126, 
		    3, 16, 8, 0, 126, 128, 1, 0, 0, 0, 127, 121, 1, 0, 0, 0, 127, 122, 
		    1, 0, 0, 0, 128, 9, 1, 0, 0, 0, 129, 130, 5, 41, 0, 0, 130, 131, 3, 
		    68, 34, 0, 131, 132, 5, 42, 0, 0, 132, 11, 1, 0, 0, 0, 133, 134, 3, 
		    94, 47, 0, 134, 135, 5, 6, 0, 0, 135, 136, 3, 6, 3, 0, 136, 13, 1, 
		    0, 0, 0, 137, 138, 3, 66, 33, 0, 138, 139, 5, 7, 0, 0, 139, 140, 3, 
		    8, 4, 0, 140, 15, 1, 0, 0, 0, 141, 142, 6, 8, -1, 0, 142, 143, 5, 
		    39, 0, 0, 143, 144, 3, 16, 8, 0, 144, 145, 5, 40, 0, 0, 145, 170, 
		    1, 0, 0, 0, 146, 170, 3, 22, 11, 0, 147, 148, 7, 0, 0, 0, 148, 170, 
		    3, 16, 8, 15, 149, 150, 5, 5, 0, 0, 150, 151, 5, 39, 0, 0, 151, 152, 
		    3, 16, 8, 0, 152, 153, 5, 40, 0, 0, 153, 170, 1, 0, 0, 0, 154, 155, 
		    5, 45, 0, 0, 155, 156, 3, 16, 8, 0, 156, 157, 5, 47, 0, 0, 157, 160, 
		    3, 16, 8, 0, 158, 159, 5, 48, 0, 0, 159, 161, 3, 16, 8, 0, 160, 158, 
		    1, 0, 0, 0, 160, 161, 1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 163, 
		    5, 46, 0, 0, 163, 170, 1, 0, 0, 0, 164, 170, 3, 42, 21, 0, 165, 170, 
		    3, 90, 45, 0, 166, 170, 3, 88, 44, 0, 167, 170, 3, 86, 43, 0, 168, 
		    170, 3, 62, 31, 0, 169, 141, 1, 0, 0, 0, 169, 146, 1, 0, 0, 0, 169, 
		    147, 1, 0, 0, 0, 169, 149, 1, 0, 0, 0, 169, 154, 1, 0, 0, 0, 169, 
		    164, 1, 0, 0, 0, 169, 165, 1, 0, 0, 0, 169, 166, 1, 0, 0, 0, 169, 
		    167, 1, 0, 0, 0, 169, 168, 1, 0, 0, 0, 170, 200, 1, 0, 0, 0, 171, 
		    172, 10, 13, 0, 0, 172, 173, 7, 1, 0, 0, 173, 199, 3, 16, 8, 14, 174, 
		    175, 10, 12, 0, 0, 175, 176, 7, 0, 0, 0, 176, 199, 3, 16, 8, 13, 177, 
		    178, 10, 11, 0, 0, 178, 179, 5, 57, 0, 0, 179, 199, 3, 16, 8, 12, 
		    180, 181, 10, 10, 0, 0, 181, 182, 3, 84, 42, 0, 182, 183, 3, 16, 8, 
		    11, 183, 199, 1, 0, 0, 0, 184, 185, 10, 8, 0, 0, 185, 186, 5, 2, 0, 
		    0, 186, 199, 3, 16, 8, 9, 187, 188, 10, 7, 0, 0, 188, 189, 7, 2, 0, 
		    0, 189, 199, 3, 16, 8, 8, 190, 191, 10, 16, 0, 0, 191, 192, 5, 43, 
		    0, 0, 192, 193, 3, 80, 40, 0, 193, 194, 5, 44, 0, 0, 194, 199, 1, 
		    0, 0, 0, 195, 196, 10, 9, 0, 0, 196, 197, 5, 36, 0, 0, 197, 199, 3, 
		    18, 9, 0, 198, 171, 1, 0, 0, 0, 198, 174, 1, 0, 0, 0, 198, 177, 1, 
		    0, 0, 0, 198, 180, 1, 0, 0, 0, 198, 184, 1, 0, 0, 0, 198, 187, 1, 
		    0, 0, 0, 198, 190, 1, 0, 0, 0, 198, 195, 1, 0, 0, 0, 199, 202, 1, 
		    0, 0, 0, 200, 198, 1, 0, 0, 0, 200, 201, 1, 0, 0, 0, 201, 17, 1, 0, 
		    0, 0, 202, 200, 1, 0, 0, 0, 203, 204, 5, 41, 0, 0, 204, 205, 3, 20, 
		    10, 0, 205, 206, 5, 42, 0, 0, 206, 19, 1, 0, 0, 0, 207, 212, 3, 42, 
		    21, 0, 208, 209, 5, 37, 0, 0, 209, 211, 3, 42, 21, 0, 210, 208, 1, 
		    0, 0, 0, 211, 214, 1, 0, 0, 0, 212, 210, 1, 0, 0, 0, 212, 213, 1, 
		    0, 0, 0, 213, 224, 1, 0, 0, 0, 214, 212, 1, 0, 0, 0, 215, 220, 3, 
		    86, 43, 0, 216, 217, 5, 37, 0, 0, 217, 219, 3, 86, 43, 0, 218, 216, 
		    1, 0, 0, 0, 219, 222, 1, 0, 0, 0, 220, 218, 1, 0, 0, 0, 220, 221, 
		    1, 0, 0, 0, 221, 224, 1, 0, 0, 0, 222, 220, 1, 0, 0, 0, 223, 207, 
		    1, 0, 0, 0, 223, 215, 1, 0, 0, 0, 224, 21, 1, 0, 0, 0, 225, 233, 3, 
		    36, 18, 0, 226, 233, 3, 24, 12, 0, 227, 233, 3, 26, 13, 0, 228, 233, 
		    3, 28, 14, 0, 229, 233, 3, 32, 16, 0, 230, 233, 3, 30, 15, 0, 231, 
		    233, 3, 34, 17, 0, 232, 225, 1, 0, 0, 0, 232, 226, 1, 0, 0, 0, 232, 
		    227, 1, 0, 0, 0, 232, 228, 1, 0, 0, 0, 232, 229, 1, 0, 0, 0, 232, 
		    230, 1, 0, 0, 0, 232, 231, 1, 0, 0, 0, 233, 23, 1, 0, 0, 0, 234, 235, 
		    7, 3, 0, 0, 235, 236, 5, 39, 0, 0, 236, 237, 3, 16, 8, 0, 237, 238, 
		    5, 40, 0, 0, 238, 258, 1, 0, 0, 0, 239, 240, 7, 4, 0, 0, 240, 241, 
		    5, 39, 0, 0, 241, 242, 3, 16, 8, 0, 242, 243, 5, 37, 0, 0, 243, 244, 
		    3, 16, 8, 0, 244, 245, 5, 40, 0, 0, 245, 258, 1, 0, 0, 0, 246, 247, 
		    7, 5, 0, 0, 247, 248, 5, 39, 0, 0, 248, 251, 3, 16, 8, 0, 249, 250, 
		    5, 37, 0, 0, 250, 252, 3, 16, 8, 0, 251, 249, 1, 0, 0, 0, 252, 253, 
		    1, 0, 0, 0, 253, 251, 1, 0, 0, 0, 253, 254, 1, 0, 0, 0, 254, 255, 
		    1, 0, 0, 0, 255, 256, 5, 40, 0, 0, 256, 258, 1, 0, 0, 0, 257, 234, 
		    1, 0, 0, 0, 257, 239, 1, 0, 0, 0, 257, 246, 1, 0, 0, 0, 258, 25, 1, 
		    0, 0, 0, 259, 260, 5, 14, 0, 0, 260, 261, 5, 39, 0, 0, 261, 262, 3, 
		    16, 8, 0, 262, 263, 5, 37, 0, 0, 263, 264, 3, 86, 43, 0, 264, 265, 
		    5, 40, 0, 0, 265, 272, 1, 0, 0, 0, 266, 267, 5, 28, 0, 0, 267, 268, 
		    5, 39, 0, 0, 268, 269, 3, 16, 8, 0, 269, 270, 5, 40, 0, 0, 270, 272, 
		    1, 0, 0, 0, 271, 259, 1, 0, 0, 0, 271, 266, 1, 0, 0, 0, 272, 27, 1, 
		    0, 0, 0, 273, 274, 5, 50, 0, 0, 274, 275, 5, 39, 0, 0, 275, 276, 3, 
		    16, 8, 0, 276, 277, 5, 37, 0, 0, 277, 278, 3, 16, 8, 0, 278, 279, 
		    5, 40, 0, 0, 279, 29, 1, 0, 0, 0, 280, 281, 5, 55, 0, 0, 281, 282, 
		    5, 39, 0, 0, 282, 283, 3, 16, 8, 0, 283, 284, 5, 37, 0, 0, 284, 285, 
		    5, 61, 0, 0, 285, 286, 5, 37, 0, 0, 286, 289, 5, 64, 0, 0, 287, 288, 
		    5, 37, 0, 0, 288, 290, 3, 92, 46, 0, 289, 287, 1, 0, 0, 0, 289, 290, 
		    1, 0, 0, 0, 290, 291, 1, 0, 0, 0, 291, 292, 5, 40, 0, 0, 292, 31, 
		    1, 0, 0, 0, 293, 294, 5, 49, 0, 0, 294, 295, 5, 39, 0, 0, 295, 296, 
		    3, 16, 8, 0, 296, 297, 5, 37, 0, 0, 297, 298, 3, 16, 8, 0, 298, 299, 
		    5, 40, 0, 0, 299, 33, 1, 0, 0, 0, 300, 301, 5, 56, 0, 0, 301, 302, 
		    5, 39, 0, 0, 302, 303, 3, 16, 8, 0, 303, 304, 5, 40, 0, 0, 304, 35, 
		    1, 0, 0, 0, 305, 306, 7, 6, 0, 0, 306, 307, 5, 39, 0, 0, 307, 309, 
		    3, 16, 8, 0, 308, 310, 3, 38, 19, 0, 309, 308, 1, 0, 0, 0, 309, 310, 
		    1, 0, 0, 0, 310, 311, 1, 0, 0, 0, 311, 312, 5, 40, 0, 0, 312, 37, 
		    1, 0, 0, 0, 313, 314, 5, 26, 0, 0, 314, 319, 3, 88, 44, 0, 315, 316, 
		    5, 37, 0, 0, 316, 318, 3, 88, 44, 0, 317, 315, 1, 0, 0, 0, 318, 321, 
		    1, 0, 0, 0, 319, 317, 1, 0, 0, 0, 319, 320, 1, 0, 0, 0, 320, 39, 1, 
		    0, 0, 0, 321, 319, 1, 0, 0, 0, 322, 323, 5, 62, 0, 0, 323, 41, 1, 
		    0, 0, 0, 324, 325, 5, 43, 0, 0, 325, 326, 3, 40, 20, 0, 326, 327, 
		    5, 44, 0, 0, 327, 43, 1, 0, 0, 0, 328, 329, 7, 7, 0, 0, 329, 45, 1, 
		    0, 0, 0, 330, 331, 7, 8, 0, 0, 331, 47, 1, 0, 0, 0, 332, 333, 7, 9, 
		    0, 0, 333, 49, 1, 0, 0, 0, 334, 346, 3, 44, 22, 0, 335, 336, 5, 39, 
		    0, 0, 336, 341, 5, 76, 0, 0, 337, 338, 5, 37, 0, 0, 338, 340, 5, 76, 
		    0, 0, 339, 337, 1, 0, 0, 0, 340, 343, 1, 0, 0, 0, 341, 339, 1, 0, 
		    0, 0, 341, 342, 1, 0, 0, 0, 342, 344, 1, 0, 0, 0, 343, 341, 1, 0, 
		    0, 0, 344, 346, 5, 40, 0, 0, 345, 334, 1, 0, 0, 0, 345, 335, 1, 0, 
		    0, 0, 346, 51, 1, 0, 0, 0, 347, 359, 3, 46, 23, 0, 348, 349, 5, 39, 
		    0, 0, 349, 354, 5, 79, 0, 0, 350, 351, 5, 37, 0, 0, 351, 353, 5, 79, 
		    0, 0, 352, 350, 1, 0, 0, 0, 353, 356, 1, 0, 0, 0, 354, 352, 1, 0, 
		    0, 0, 354, 355, 1, 0, 0, 0, 355, 357, 1, 0, 0, 0, 356, 354, 1, 0, 
		    0, 0, 357, 359, 5, 40, 0, 0, 358, 347, 1, 0, 0, 0, 358, 348, 1, 0, 
		    0, 0, 359, 53, 1, 0, 0, 0, 360, 372, 3, 48, 24, 0, 361, 362, 5, 39, 
		    0, 0, 362, 367, 5, 82, 0, 0, 363, 364, 5, 37, 0, 0, 364, 366, 5, 82, 
		    0, 0, 365, 363, 1, 0, 0, 0, 366, 369, 1, 0, 0, 0, 367, 365, 1, 0, 
		    0, 0, 367, 368, 1, 0, 0, 0, 368, 370, 1, 0, 0, 0, 369, 367, 1, 0, 
		    0, 0, 370, 372, 5, 40, 0, 0, 371, 360, 1, 0, 0, 0, 371, 361, 1, 0, 
		    0, 0, 372, 55, 1, 0, 0, 0, 373, 374, 5, 74, 0, 0, 374, 375, 5, 38, 
		    0, 0, 375, 376, 5, 1, 0, 0, 376, 57, 1, 0, 0, 0, 377, 378, 5, 75, 
		    0, 0, 378, 379, 5, 38, 0, 0, 379, 380, 3, 86, 43, 0, 380, 59, 1, 0, 
		    0, 0, 381, 387, 3, 50, 25, 0, 382, 387, 3, 52, 26, 0, 383, 387, 3, 
		    54, 27, 0, 384, 387, 3, 56, 28, 0, 385, 387, 3, 58, 29, 0, 386, 381, 
		    1, 0, 0, 0, 386, 382, 1, 0, 0, 0, 386, 383, 1, 0, 0, 0, 386, 384, 
		    1, 0, 0, 0, 386, 385, 1, 0, 0, 0, 387, 61, 1, 0, 0, 0, 388, 389, 5, 
		    41, 0, 0, 389, 390, 3, 64, 32, 0, 390, 391, 5, 42, 0, 0, 391, 63, 
		    1, 0, 0, 0, 392, 397, 3, 68, 34, 0, 393, 397, 3, 72, 36, 0, 394, 397, 
		    3, 74, 37, 0, 395, 397, 3, 70, 35, 0, 396, 392, 1, 0, 0, 0, 396, 393, 
		    1, 0, 0, 0, 396, 394, 1, 0, 0, 0, 396, 395, 1, 0, 0, 0, 397, 65, 1, 
		    0, 0, 0, 398, 399, 5, 41, 0, 0, 399, 400, 3, 72, 36, 0, 400, 401, 
		    5, 42, 0, 0, 401, 67, 1, 0, 0, 0, 402, 403, 3, 76, 38, 0, 403, 69, 
		    1, 0, 0, 0, 404, 405, 5, 89, 0, 0, 405, 71, 1, 0, 0, 0, 406, 407, 
		    5, 87, 0, 0, 407, 73, 1, 0, 0, 0, 408, 409, 5, 88, 0, 0, 409, 75, 
		    1, 0, 0, 0, 410, 415, 3, 78, 39, 0, 411, 412, 5, 37, 0, 0, 412, 414, 
		    3, 60, 30, 0, 413, 411, 1, 0, 0, 0, 414, 417, 1, 0, 0, 0, 415, 413, 
		    1, 0, 0, 0, 415, 416, 1, 0, 0, 0, 416, 427, 1, 0, 0, 0, 417, 415, 
		    1, 0, 0, 0, 418, 423, 3, 60, 30, 0, 419, 420, 5, 37, 0, 0, 420, 422, 
		    3, 60, 30, 0, 421, 419, 1, 0, 0, 0, 422, 425, 1, 0, 0, 0, 423, 421, 
		    1, 0, 0, 0, 423, 424, 1, 0, 0, 0, 424, 427, 1, 0, 0, 0, 425, 423, 
		    1, 0, 0, 0, 426, 410, 1, 0, 0, 0, 426, 418, 1, 0, 0, 0, 427, 77, 1, 
		    0, 0, 0, 428, 429, 7, 10, 0, 0, 429, 79, 1, 0, 0, 0, 430, 431, 5, 
		    51, 0, 0, 431, 444, 3, 16, 8, 0, 432, 433, 5, 52, 0, 0, 433, 444, 
		    3, 88, 44, 0, 434, 435, 5, 53, 0, 0, 435, 440, 3, 82, 41, 0, 436, 
		    437, 5, 37, 0, 0, 437, 439, 3, 82, 41, 0, 438, 436, 1, 0, 0, 0, 439, 
		    442, 1, 0, 0, 0, 440, 438, 1, 0, 0, 0, 440, 441, 1, 0, 0, 0, 441, 
		    444, 1, 0, 0, 0, 442, 440, 1, 0, 0, 0, 443, 430, 1, 0, 0, 0, 443, 
		    432, 1, 0, 0, 0, 443, 434, 1, 0, 0, 0, 444, 81, 1, 0, 0, 0, 445, 446, 
		    3, 88, 44, 0, 446, 447, 5, 54, 0, 0, 447, 448, 3, 88, 44, 0, 448, 
		    83, 1, 0, 0, 0, 449, 450, 7, 11, 0, 0, 450, 85, 1, 0, 0, 0, 451, 452, 
		    7, 12, 0, 0, 452, 87, 1, 0, 0, 0, 453, 458, 5, 58, 0, 0, 454, 458, 
		    5, 59, 0, 0, 455, 458, 5, 60, 0, 0, 456, 458, 3, 92, 46, 0, 457, 453, 
		    1, 0, 0, 0, 457, 454, 1, 0, 0, 0, 457, 455, 1, 0, 0, 0, 457, 456, 
		    1, 0, 0, 0, 458, 89, 1, 0, 0, 0, 459, 460, 5, 43, 0, 0, 460, 461, 
		    3, 92, 46, 0, 461, 462, 5, 44, 0, 0, 462, 91, 1, 0, 0, 0, 463, 464, 
		    5, 69, 0, 0, 464, 93, 1, 0, 0, 0, 465, 466, 5, 69, 0, 0, 466, 95, 
		    1, 0, 0, 0, 34, 100, 102, 111, 115, 119, 127, 160, 169, 198, 200, 
		    212, 220, 223, 232, 253, 257, 271, 289, 309, 319, 341, 345, 354, 358, 
		    367, 371, 386, 396, 415, 423, 426, 440, 443, 457];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "dpm_xlParser.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function start(): Context\StartContext
		{
		    $localContext = new Context\StartContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_start);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(96);
		        $this->statement();
		        $this->setState(102);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->setState(97);
		        	    $this->match(self::EOL);
		        	    $this->setState(98);
		        	    $this->statements();
		        	break;

		        	case 2:
		        	    $this->setState(100);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::EOL) {
		        	    	$this->setState(99);
		        	    	$this->match(self::EOL);
		        	    }
		        	break;
		        }
		        $this->setState(104);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statements(): Context\StatementsContext
		{
		    $localContext = new Context\StatementsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_statements);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(109); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(106);
		        	$this->statement();
		        	$this->setState(107);
		        	$this->match(self::EOL);
		        	$this->setState(111); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2127434671874883618) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & 511) !== 0));
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_statement);

		    try {
		        $this->setState(115);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ExprWithoutAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(113);
		        	    $this->expressionWithoutAssignment();
		        	break;

		        	case 2:
		        	    $localContext = new Context\AssignmentExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(114);
		        	    $this->temporaryAssignmentExpression();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function persistentExpression(): Context\PersistentExpressionContext
		{
		    $localContext = new Context\PersistentExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_persistentExpression);

		    try {
		        $this->setState(119);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(117);
		        	    $this->persistentAssignmentExpression();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(118);
		        	    $this->expressionWithoutAssignment();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionWithoutAssignment(): Context\ExpressionWithoutAssignmentContext
		{
		    $localContext = new Context\ExpressionWithoutAssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_expressionWithoutAssignment);

		    try {
		        $this->setState(127);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::BOOLEAN_LITERAL:
		            case self::NOT:
		            case self::MATCH:
		            case self::PLUS:
		            case self::MINUS:
		            case self::MAX_AGGR:
		            case self::MIN_AGGR:
		            case self::SUM:
		            case self::COUNT:
		            case self::AVG:
		            case self::MEDIAN:
		            case self::ABS:
		            case self::ISNULL:
		            case self::EXP:
		            case self::LN:
		            case self::SQRT:
		            case self::POWER:
		            case self::LOG:
		            case self::MAX:
		            case self::MIN:
		            case self::LPAREN:
		            case self::CURLY_BRACKET_LEFT:
		            case self::SQUARE_BRACKET_LEFT:
		            case self::IF:
		            case self::NVL:
		            case self::FILTER:
		            case self::TIME_SHIFT:
		            case self::LEN:
		            case self::ROW_HEADING:
		            case self::COL_HEADING:
		            case self::SHEET_HEADING:
		            case self::INTEGER_LITERAL:
		            case self::DECIMAL_LITERAL:
		            case self::PERCENT_LITERAL:
		            case self::STRING_LITERAL:
		            case self::EMPTY_LITERAL:
		            case self::CODE:
		            case self::DATE_LITERAL:
		            case self::TIME_INTERVAL_LITERAL:
		            case self::TIME_PERIOD_LITERAL:
		            	$localContext = new Context\ExprWithoutPartialSelectionContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(121);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::WITH:
		            	$localContext = new Context\ExprWithSelectionContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(122);
		            	$this->match(self::WITH);
		            	$this->setState(123);
		            	$this->partialSelection();
		            	$this->setState(124);
		            	$this->match(self::COLON);
		            	$this->setState(125);
		            	$this->recursiveExpression(0);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function partialSelection(): Context\PartialSelectionContext
		{
		    $localContext = new Context\PartialSelectionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_partialSelection);

		    try {
		        $localContext = new Context\PartialSelectContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->match(self::CURLY_BRACKET_LEFT);
		        $this->setState(130);
		        $this->cellRef();
		        $this->setState(131);
		        $this->match(self::CURLY_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function temporaryAssignmentExpression(): Context\TemporaryAssignmentExpressionContext
		{
		    $localContext = new Context\TemporaryAssignmentExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_temporaryAssignmentExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(133);
		        $this->temporaryIdentifier();
		        $this->setState(134);
		        $this->match(self::ASSIGN);
		        $this->setState(135);
		        $this->persistentExpression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function persistentAssignmentExpression(): Context\PersistentAssignmentExpressionContext
		{
		    $localContext = new Context\PersistentAssignmentExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_persistentAssignmentExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->varID();
		        $this->setState(138);
		        $this->match(self::PERSISTENT_ASSIGN);
		        $this->setState(139);
		        $this->expressionWithoutAssignment();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence): Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 16;
			$this->enterRecursionRule($localContext, 16, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(169);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
					case 1:
					    $localContext = new Context\ParExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(142);
					    $this->match(self::LPAREN);
					    $this->setState(143);
					    $this->recursiveExpression(0);
					    $this->setState(144);
					    $this->match(self::RPAREN);
					break;

					case 2:
					    $localContext = new Context\FuncExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(146);
					    $this->functions();
					break;

					case 3:
					    $localContext = new Context\UnaryExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(147);

					    $localContext->op = $this->input->LT(1);
					    $_la = $this->input->LA(1);

					    if (!($_la === self::PLUS || $_la === self::MINUS)) {
					    	    $localContext->op = $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					    $this->setState(148);
					    $this->recursiveExpression(15);
					break;

					case 4:
					    $localContext = new Context\NotExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(149);
					    $localContext->op = $this->match(self::NOT);
					    $this->setState(150);
					    $this->match(self::LPAREN);
					    $this->setState(151);
					    $this->recursiveExpression(0);
					    $this->setState(152);
					    $this->match(self::RPAREN);
					break;

					case 5:
					    $localContext = new Context\IfExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(154);
					    $this->match(self::IF);
					    $this->setState(155);
					    $localContext->conditionalExpr = $this->recursiveExpression(0);
					    $this->setState(156);
					    $this->match(self::THEN);
					    $this->setState(157);
					    $localContext->thenExpr = $this->recursiveExpression(0);
					    $this->setState(160);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if ($_la === self::ELSE) {
					    	$this->setState(158);
					    	$this->match(self::ELSE);
					    	$this->setState(159);
					    	$localContext->elseExpr = $this->recursiveExpression(0);
					    }
					    $this->setState(162);
					    $this->match(self::ENDIF);
					break;

					case 6:
					    $localContext = new Context\ItemReferenceExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(164);
					    $this->itemReference();
					break;

					case 7:
					    $localContext = new Context\PropertyReferenceExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(165);
					    $this->propertyReference();
					break;

					case 8:
					    $localContext = new Context\KeyNamesExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(166);
					    $this->keyNames();
					break;

					case 9:
					    $localContext = new Context\LiteralExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(167);
					    $this->literal();
					break;

					case 10:
					    $localContext = new Context\SelectExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(168);
					    $this->select();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(200);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(198);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
							case 1:
							    $localContext = new Context\NumericExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(171);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(172);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::MULT || $_la === self::DIV)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(173);
							    $localContext->right = $this->recursiveExpression(14);
							break;

							case 2:
							    $localContext = new Context\NumericExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(174);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(175);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::PLUS || $_la === self::MINUS)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(176);
							    $localContext->right = $this->recursiveExpression(13);
							break;

							case 3:
							    $localContext = new Context\ConcatExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(177);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(178);
							    $localContext->op = $this->match(self::CONCAT);
							    $this->setState(179);
							    $localContext->right = $this->recursiveExpression(12);
							break;

							case 4:
							    $localContext = new Context\CompExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(180);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(181);
							    $localContext->op = $this->comparisonOperators();
							    $this->setState(182);
							    $localContext->right = $this->recursiveExpression(11);
							break;

							case 5:
							    $localContext = new Context\BoolExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(184);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(185);
							    $localContext->op = $this->match(self::AND);
							    $this->setState(186);
							    $localContext->right = $this->recursiveExpression(9);
							break;

							case 6:
							    $localContext = new Context\BoolExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(187);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(188);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::OR || $_la === self::XOR)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(189);
							    $localContext->right = $this->recursiveExpression(8);
							break;

							case 7:
							    $localContext = new Context\ClauseExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(190);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(191);
							    $this->match(self::SQUARE_BRACKET_LEFT);
							    $this->setState(192);
							    $this->clauseOperators();
							    $this->setState(193);
							    $this->match(self::SQUARE_BRACKET_RIGHT);
							break;

							case 8:
							    $localContext = new Context\InExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(195);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(196);
							    $localContext->op = $this->match(self::IN);
							    $this->setState(197);
							    $this->setOperand();
							break;
						} 
					}

					$this->setState(202);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function setOperand(): Context\SetOperandContext
		{
		    $localContext = new Context\SetOperandContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_setOperand);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(203);
		        $this->match(self::CURLY_BRACKET_LEFT);
		        $this->setState(204);
		        $this->setElements();
		        $this->setState(205);
		        $this->match(self::CURLY_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function setElements(): Context\SetElementsContext
		{
		    $localContext = new Context\SetElementsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_setElements);

		    try {
		        $this->setState(223);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SQUARE_BRACKET_LEFT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(207);
		            	$this->itemReference();
		            	$this->setState(212);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(208);
		            		$this->match(self::COMMA);
		            		$this->setState(209);
		            		$this->itemReference();
		            		$this->setState(214);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::BOOLEAN_LITERAL:
		            case self::INTEGER_LITERAL:
		            case self::DECIMAL_LITERAL:
		            case self::PERCENT_LITERAL:
		            case self::STRING_LITERAL:
		            case self::EMPTY_LITERAL:
		            case self::DATE_LITERAL:
		            case self::TIME_INTERVAL_LITERAL:
		            case self::TIME_PERIOD_LITERAL:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(215);
		            	$this->literal();
		            	$this->setState(220);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(216);
		            		$this->match(self::COMMA);
		            		$this->setState(217);
		            		$this->literal();
		            		$this->setState(222);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functions(): Context\FunctionsContext
		{
		    $localContext = new Context\FunctionsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_functions);

		    try {
		        $this->setState(232);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::MAX_AGGR:
		            case self::MIN_AGGR:
		            case self::SUM:
		            case self::COUNT:
		            case self::AVG:
		            case self::MEDIAN:
		            	$localContext = new Context\AggregateFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(225);
		            	$this->aggregateOperators();
		            	break;

		            case self::ABS:
		            case self::EXP:
		            case self::LN:
		            case self::SQRT:
		            case self::POWER:
		            case self::LOG:
		            case self::MAX:
		            case self::MIN:
		            	$localContext = new Context\NumericFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(226);
		            	$this->numericOperators();
		            	break;

		            case self::MATCH:
		            case self::ISNULL:
		            	$localContext = new Context\ComparisonFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(227);
		            	$this->comparisonFunctionOperators();
		            	break;

		            case self::FILTER:
		            	$localContext = new Context\FilterFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(228);
		            	$this->filterOperators();
		            	break;

		            case self::NVL:
		            	$localContext = new Context\ConditionalFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(229);
		            	$this->conditionalOperators();
		            	break;

		            case self::TIME_SHIFT:
		            	$localContext = new Context\TimeFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(230);
		            	$this->timeOperators();
		            	break;

		            case self::LEN:
		            	$localContext = new Context\StringFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(231);
		            	$this->stringOperators();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function numericOperators(): Context\NumericOperatorsContext
		{
		    $localContext = new Context\NumericOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_numericOperators);

		    try {
		        $this->setState(257);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ABS:
		            case self::EXP:
		            case self::LN:
		            case self::SQRT:
		            	$localContext = new Context\UnaryNumericFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(234);

		            	$localContext->op = $this->input->LT(1);
		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3892314112) !== 0))) {
		            		    $localContext->op = $this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(235);
		            	$this->match(self::LPAREN);
		            	$this->setState(236);
		            	$this->recursiveExpression(0);
		            	$this->setState(237);
		            	$this->match(self::RPAREN);
		            	break;

		            case self::POWER:
		            case self::LOG:
		            	$localContext = new Context\BinaryNumericFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(239);

		            	$localContext->op = $this->input->LT(1);
		            	$_la = $this->input->LA(1);

		            	if (!($_la === self::POWER || $_la === self::LOG)) {
		            		    $localContext->op = $this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(240);
		            	$this->match(self::LPAREN);
		            	$this->setState(241);
		            	$localContext->left = $this->recursiveExpression(0);
		            	$this->setState(242);
		            	$this->match(self::COMMA);
		            	$this->setState(243);
		            	$localContext->right = $this->recursiveExpression(0);
		            	$this->setState(244);
		            	$this->match(self::RPAREN);
		            	break;

		            case self::MAX:
		            case self::MIN:
		            	$localContext = new Context\ComplexNumericFunctionsContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(246);

		            	$localContext->op = $this->input->LT(1);
		            	$_la = $this->input->LA(1);

		            	if (!($_la === self::MAX || $_la === self::MIN)) {
		            		    $localContext->op = $this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(247);
		            	$this->match(self::LPAREN);
		            	$this->setState(248);
		            	$this->recursiveExpression(0);
		            	$this->setState(251); 
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	do {
		            		$this->setState(249);
		            		$this->match(self::COMMA);
		            		$this->setState(250);
		            		$this->recursiveExpression(0);
		            		$this->setState(253); 
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	} while ($_la === self::COMMA);
		            	$this->setState(255);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function comparisonFunctionOperators(): Context\ComparisonFunctionOperatorsContext
		{
		    $localContext = new Context\ComparisonFunctionOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_comparisonFunctionOperators);

		    try {
		        $this->setState(271);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::MATCH:
		            	$localContext = new Context\MatchExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(259);
		            	$this->match(self::MATCH);
		            	$this->setState(260);
		            	$this->match(self::LPAREN);
		            	$this->setState(261);
		            	$this->recursiveExpression(0);
		            	$this->setState(262);
		            	$this->match(self::COMMA);
		            	$this->setState(263);
		            	$this->literal();
		            	$this->setState(264);
		            	$this->match(self::RPAREN);
		            	break;

		            case self::ISNULL:
		            	$localContext = new Context\IsnullExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(266);
		            	$this->match(self::ISNULL);
		            	$this->setState(267);
		            	$this->match(self::LPAREN);
		            	$this->setState(268);
		            	$this->recursiveExpression(0);
		            	$this->setState(269);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function filterOperators(): Context\FilterOperatorsContext
		{
		    $localContext = new Context\FilterOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_filterOperators);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(273);
		        $this->match(self::FILTER);
		        $this->setState(274);
		        $this->match(self::LPAREN);
		        $this->setState(275);
		        $this->recursiveExpression(0);
		        $this->setState(276);
		        $this->match(self::COMMA);
		        $this->setState(277);
		        $this->recursiveExpression(0);
		        $this->setState(278);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function timeOperators(): Context\TimeOperatorsContext
		{
		    $localContext = new Context\TimeOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_timeOperators);

		    try {
		        $localContext = new Context\TimeShiftFunctionContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(280);
		        $this->match(self::TIME_SHIFT);
		        $this->setState(281);
		        $this->match(self::LPAREN);
		        $this->setState(282);
		        $this->recursiveExpression(0);
		        $this->setState(283);
		        $this->match(self::COMMA);
		        $this->setState(284);
		        $this->match(self::TIME_PERIOD);
		        $this->setState(285);
		        $this->match(self::COMMA);
		        $this->setState(286);
		        $this->match(self::INTEGER_LITERAL);
		        $this->setState(289);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(287);
		        	$this->match(self::COMMA);
		        	$this->setState(288);
		        	$this->propertyCode();
		        }
		        $this->setState(291);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function conditionalOperators(): Context\ConditionalOperatorsContext
		{
		    $localContext = new Context\ConditionalOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_conditionalOperators);

		    try {
		        $localContext = new Context\NvlFunctionContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(293);
		        $this->match(self::NVL);
		        $this->setState(294);
		        $this->match(self::LPAREN);
		        $this->setState(295);
		        $this->recursiveExpression(0);
		        $this->setState(296);
		        $this->match(self::COMMA);
		        $this->setState(297);
		        $this->recursiveExpression(0);
		        $this->setState(298);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stringOperators(): Context\StringOperatorsContext
		{
		    $localContext = new Context\StringOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_stringOperators);

		    try {
		        $localContext = new Context\UnaryStringFunctionContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(300);
		        $this->match(self::LEN);
		        $this->setState(301);
		        $this->match(self::LPAREN);
		        $this->setState(302);
		        $this->recursiveExpression(0);
		        $this->setState(303);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function aggregateOperators(): Context\AggregateOperatorsContext
		{
		    $localContext = new Context\AggregateOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_aggregateOperators);

		    try {
		        $localContext = new Context\CommonAggrOpContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(305);

		        $localContext->op = $this->input->LT(1);
		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 66060288) !== 0))) {
		        	    $localContext->op = $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(306);
		        $this->match(self::LPAREN);
		        $this->setState(307);
		        $this->recursiveExpression(0);
		        $this->setState(309);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::GROUP_BY) {
		        	$this->setState(308);
		        	$this->groupingClause();
		        }
		        $this->setState(311);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function groupingClause(): Context\GroupingClauseContext
		{
		    $localContext = new Context\GroupingClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_groupingClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(313);
		        $this->match(self::GROUP_BY);
		        $this->setState(314);
		        $this->keyNames();
		        $this->setState(319);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(315);
		        	$this->match(self::COMMA);
		        	$this->setState(316);
		        	$this->keyNames();
		        	$this->setState(321);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function itemSignature(): Context\ItemSignatureContext
		{
		    $localContext = new Context\ItemSignatureContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_itemSignature);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->match(self::ITEM_SIGNATURE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function itemReference(): Context\ItemReferenceContext
		{
		    $localContext = new Context\ItemReferenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_itemReference);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(324);
		        $this->match(self::SQUARE_BRACKET_LEFT);
		        $this->setState(325);
		        $this->itemSignature();
		        $this->setState(326);
		        $this->match(self::SQUARE_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function rowElem(): Context\RowElemContext
		{
		    $localContext = new Context\RowElemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_rowElem);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(328);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 76)) & ~0x3f) === 0 && ((1 << ($_la - 76)) & 7) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function colElem(): Context\ColElemContext
		{
		    $localContext = new Context\ColElemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_colElem);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(330);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 79)) & ~0x3f) === 0 && ((1 << ($_la - 79)) & 7) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sheetElem(): Context\SheetElemContext
		{
		    $localContext = new Context\SheetElemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_sheetElem);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(332);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 82)) & ~0x3f) === 0 && ((1 << ($_la - 82)) & 7) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function rowHandler(): Context\RowHandlerContext
		{
		    $localContext = new Context\RowHandlerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_rowHandler);

		    try {
		        $this->setState(345);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ROW:
		            case self::ROW_RANGE:
		            case self::ROW_ALL:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(334);
		            	$this->rowElem();
		            	break;

		            case self::LPAREN:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(335);
		            	$this->match(self::LPAREN);
		            	$this->setState(336);
		            	$this->match(self::ROW);
		            	$this->setState(341);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(337);
		            		$this->match(self::COMMA);
		            		$this->setState(338);
		            		$this->match(self::ROW);
		            		$this->setState(343);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(344);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function colHandler(): Context\ColHandlerContext
		{
		    $localContext = new Context\ColHandlerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_colHandler);

		    try {
		        $this->setState(358);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::COL:
		            case self::COL_RANGE:
		            case self::COL_ALL:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(347);
		            	$this->colElem();
		            	break;

		            case self::LPAREN:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(348);
		            	$this->match(self::LPAREN);
		            	$this->setState(349);
		            	$this->match(self::COL);
		            	$this->setState(354);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(350);
		            		$this->match(self::COMMA);
		            		$this->setState(351);
		            		$this->match(self::COL);
		            		$this->setState(356);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(357);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sheetHandler(): Context\SheetHandlerContext
		{
		    $localContext = new Context\SheetHandlerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_sheetHandler);

		    try {
		        $this->setState(371);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SHEET:
		            case self::SHEET_RANGE:
		            case self::SHEET_ALL:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(360);
		            	$this->sheetElem();
		            	break;

		            case self::LPAREN:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(361);
		            	$this->match(self::LPAREN);
		            	$this->setState(362);
		            	$this->match(self::SHEET);
		            	$this->setState(367);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(363);
		            		$this->match(self::COMMA);
		            		$this->setState(364);
		            		$this->match(self::SHEET);
		            		$this->setState(369);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(370);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function interval(): Context\IntervalContext
		{
		    $localContext = new Context\IntervalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_interval);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(373);
		        $this->match(self::INTERVAL);
		        $this->setState(374);
		        $this->match(self::COLON);
		        $this->setState(375);
		        $this->match(self::BOOLEAN_LITERAL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function default_(): Context\DefaultContext
		{
		    $localContext = new Context\DefaultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_default);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(377);
		        $this->match(self::DEFAULT);
		        $this->setState(378);
		        $this->match(self::COLON);
		        $this->setState(379);
		        $this->literal();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argument(): Context\ArgumentContext
		{
		    $localContext = new Context\ArgumentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_argument);

		    try {
		        $this->setState(386);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\RowArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(381);
		        	    $this->rowHandler();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ColArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(382);
		        	    $this->colHandler();
		        	break;

		        	case 3:
		        	    $localContext = new Context\SheetArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(383);
		        	    $this->sheetHandler();
		        	break;

		        	case 4:
		        	    $localContext = new Context\IntervalArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(384);
		        	    $this->interval();
		        	break;

		        	case 5:
		        	    $localContext = new Context\DefaultArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(385);
		        	    $this->default_();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function select(): Context\SelectContext
		{
		    $localContext = new Context\SelectContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_select);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(388);
		        $this->match(self::CURLY_BRACKET_LEFT);
		        $this->setState(389);
		        $this->selectOperand();
		        $this->setState(390);
		        $this->match(self::CURLY_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function selectOperand(): Context\SelectOperandContext
		{
		    $localContext = new Context\SelectOperandContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_selectOperand);

		    try {
		        $this->setState(396);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::LPAREN:
		            case self::INTERVAL:
		            case self::DEFAULT:
		            case self::ROW:
		            case self::ROW_RANGE:
		            case self::ROW_ALL:
		            case self::COL:
		            case self::COL_RANGE:
		            case self::COL_ALL:
		            case self::SHEET:
		            case self::SHEET_RANGE:
		            case self::SHEET_ALL:
		            case self::TABLE_REFERENCE:
		            case self::TABLE_GROUP_REFERENCE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(392);
		            	$this->cellRef();
		            	break;

		            case self::VAR_REFERENCE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(393);
		            	$this->varRef();
		            	break;

		            case self::OPERATION_REFERENCE:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(394);
		            	$this->operationRef();
		            	break;

		            case self::PRECONDITION_ELEMENT:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(395);
		            	$this->preconditionElem();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varID(): Context\VarIDContext
		{
		    $localContext = new Context\VarIDContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_varID);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(398);
		        $this->match(self::CURLY_BRACKET_LEFT);
		        $this->setState(399);
		        $this->varRef();
		        $this->setState(400);
		        $this->match(self::CURLY_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function cellRef(): Context\CellRefContext
		{
		    $localContext = new Context\CellRefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_cellRef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(402);
		        $localContext->address = $this->cellAddress();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function preconditionElem(): Context\PreconditionElemContext
		{
		    $localContext = new Context\PreconditionElemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_preconditionElem);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(404);
		        $this->match(self::PRECONDITION_ELEMENT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varRef(): Context\VarRefContext
		{
		    $localContext = new Context\VarRefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_varRef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(406);
		        $this->match(self::VAR_REFERENCE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function operationRef(): Context\OperationRefContext
		{
		    $localContext = new Context\OperationRefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_operationRef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(408);
		        $this->match(self::OPERATION_REFERENCE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function cellAddress(): Context\CellAddressContext
		{
		    $localContext = new Context\CellAddressContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_cellAddress);

		    try {
		        $this->setState(426);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TABLE_REFERENCE:
		            case self::TABLE_GROUP_REFERENCE:
		            	$localContext = new Context\TableRefContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(410);
		            	$this->tableReference();
		            	$this->setState(415);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(411);
		            		$this->match(self::COMMA);
		            		$this->setState(412);
		            		$this->argument();
		            		$this->setState(417);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::LPAREN:
		            case self::INTERVAL:
		            case self::DEFAULT:
		            case self::ROW:
		            case self::ROW_RANGE:
		            case self::ROW_ALL:
		            case self::COL:
		            case self::COL_RANGE:
		            case self::COL_ALL:
		            case self::SHEET:
		            case self::SHEET_RANGE:
		            case self::SHEET_ALL:
		            	$localContext = new Context\CompRefContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(418);
		            	$this->argument();
		            	$this->setState(423);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(419);
		            		$this->match(self::COMMA);
		            		$this->setState(420);
		            		$this->argument();
		            		$this->setState(425);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tableReference(): Context\TableReferenceContext
		{
		    $localContext = new Context\TableReferenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_tableReference);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(428);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::TABLE_REFERENCE || $_la === self::TABLE_GROUP_REFERENCE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function clauseOperators(): Context\ClauseOperatorsContext
		{
		    $localContext = new Context\ClauseOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_clauseOperators);

		    try {
		        $this->setState(443);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::WHERE:
		            	$localContext = new Context\WhereExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(430);
		            	$this->match(self::WHERE);
		            	$this->setState(431);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::GET:
		            	$localContext = new Context\GetExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(432);
		            	$this->match(self::GET);
		            	$this->setState(433);
		            	$this->keyNames();
		            	break;

		            case self::RENAME:
		            	$localContext = new Context\RenameExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(434);
		            	$this->match(self::RENAME);
		            	$this->setState(435);
		            	$this->renameClause();
		            	$this->setState(440);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(436);
		            		$this->match(self::COMMA);
		            		$this->setState(437);
		            		$this->renameClause();
		            		$this->setState(442);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function renameClause(): Context\RenameClauseContext
		{
		    $localContext = new Context\RenameClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_renameClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(445);
		        $this->keyNames();
		        $this->setState(446);
		        $this->match(self::TO);
		        $this->setState(447);
		        $this->keyNames();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function comparisonOperators(): Context\ComparisonOperatorsContext
		{
		    $localContext = new Context\ComparisonOperatorsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_comparisonOperators);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(449);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16128) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(451);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::BOOLEAN_LITERAL || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & 479) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function keyNames(): Context\KeyNamesContext
		{
		    $localContext = new Context\KeyNamesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_keyNames);

		    try {
		        $this->setState(457);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ROW_HEADING:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(453);
		            	$this->match(self::ROW_HEADING);
		            	break;

		            case self::COL_HEADING:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(454);
		            	$this->match(self::COL_HEADING);
		            	break;

		            case self::SHEET_HEADING:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(455);
		            	$this->match(self::SHEET_HEADING);
		            	break;

		            case self::CODE:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(456);
		            	$this->propertyCode();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function propertyReference(): Context\PropertyReferenceContext
		{
		    $localContext = new Context\PropertyReferenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_propertyReference);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(459);
		        $this->match(self::SQUARE_BRACKET_LEFT);
		        $this->setState(460);
		        $this->propertyCode();
		        $this->setState(461);
		        $this->match(self::SQUARE_BRACKET_RIGHT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function propertyCode(): Context\PropertyCodeContext
		{
		    $localContext = new Context\PropertyCodeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 92, self::RULE_propertyCode);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(463);
		        $this->match(self::CODE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function temporaryIdentifier(): Context\TemporaryIdentifierContext
		{
		    $localContext = new Context\TemporaryIdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 94, self::RULE_temporaryIdentifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(465);
		        $this->match(self::CODE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 8:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 13);

			    case 1:
			        return $this->precpred($this->ctx, 12);

			    case 2:
			        return $this->precpred($this->ctx, 11);

			    case 3:
			        return $this->precpred($this->ctx, 10);

			    case 4:
			        return $this->precpred($this->ctx, 8);

			    case 5:
			        return $this->precpred($this->ctx, 7);

			    case 6:
			        return $this->precpred($this->ctx, 16);

			    case 7:
			        return $this->precpred($this->ctx, 9);
			}

			return true;
		}
	}
}

namespace Artemeon\DpmXLParser\Generated\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Artemeon\DpmXLParser\Generated\DpmXLParser;
	use Artemeon\DpmXLParser\Generated\DpmXLParserListener;

	class StartContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_start;
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::EOF, 0);
	    }

	    public function EOL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::EOL, 0);
	    }

	    public function statements(): ?StatementsContext
	    {
	    	return $this->getTypedRuleContext(StatementsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterStart($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitStart($this);
		    }
		}
	} 

	class StatementsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_statements;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function EOL(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::EOL);
	    	}

	        return $this->getToken(DpmXLParser::EOL, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterStatements($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitStatements($this);
		    }
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_statement;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AssignmentExprContext extends StatementContext
	{
		public function __construct(StatementContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function temporaryAssignmentExpression(): ?TemporaryAssignmentExpressionContext
	    {
	    	return $this->getTypedRuleContext(TemporaryAssignmentExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterAssignmentExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitAssignmentExpr($this);
		    }
		}
	}

	class ExprWithoutAssignmentContext extends StatementContext
	{
		public function __construct(StatementContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expressionWithoutAssignment(): ?ExpressionWithoutAssignmentContext
	    {
	    	return $this->getTypedRuleContext(ExpressionWithoutAssignmentContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterExprWithoutAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitExprWithoutAssignment($this);
		    }
		}
	} 

	class PersistentExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_persistentExpression;
	    }

	    public function persistentAssignmentExpression(): ?PersistentAssignmentExpressionContext
	    {
	    	return $this->getTypedRuleContext(PersistentAssignmentExpressionContext::class, 0);
	    }

	    public function expressionWithoutAssignment(): ?ExpressionWithoutAssignmentContext
	    {
	    	return $this->getTypedRuleContext(ExpressionWithoutAssignmentContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPersistentExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPersistentExpression($this);
		    }
		}
	} 

	class ExpressionWithoutAssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_expressionWithoutAssignment;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ExprWithoutPartialSelectionContext extends ExpressionWithoutAssignmentContext
	{
		public function __construct(ExpressionWithoutAssignmentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterExprWithoutPartialSelection($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitExprWithoutPartialSelection($this);
		    }
		}
	}

	class ExprWithSelectionContext extends ExpressionWithoutAssignmentContext
	{
		public function __construct(ExpressionWithoutAssignmentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function WITH(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::WITH, 0);
	    }

	    public function partialSelection(): ?PartialSelectionContext
	    {
	    	return $this->getTypedRuleContext(PartialSelectionContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COLON, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterExprWithSelection($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitExprWithSelection($this);
		    }
		}
	} 

	class PartialSelectionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_partialSelection;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PartialSelectContext extends PartialSelectionContext
	{
		public function __construct(PartialSelectionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CURLY_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_LEFT, 0);
	    }

	    public function cellRef(): ?CellRefContext
	    {
	    	return $this->getTypedRuleContext(CellRefContext::class, 0);
	    }

	    public function CURLY_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPartialSelect($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPartialSelect($this);
		    }
		}
	} 

	class TemporaryAssignmentExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_temporaryAssignmentExpression;
	    }

	    public function temporaryIdentifier(): ?TemporaryIdentifierContext
	    {
	    	return $this->getTypedRuleContext(TemporaryIdentifierContext::class, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ASSIGN, 0);
	    }

	    public function persistentExpression(): ?PersistentExpressionContext
	    {
	    	return $this->getTypedRuleContext(PersistentExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTemporaryAssignmentExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTemporaryAssignmentExpression($this);
		    }
		}
	} 

	class PersistentAssignmentExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_persistentAssignmentExpression;
	    }

	    public function varID(): ?VarIDContext
	    {
	    	return $this->getTypedRuleContext(VarIDContext::class, 0);
	    }

	    public function PERSISTENT_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::PERSISTENT_ASSIGN, 0);
	    }

	    public function expressionWithoutAssignment(): ?ExpressionWithoutAssignmentContext
	    {
	    	return $this->getTypedRuleContext(ExpressionWithoutAssignmentContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPersistentAssignmentExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPersistentAssignmentExpression($this);
		    }
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class FuncExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function functions(): ?FunctionsContext
	    {
	    	return $this->getTypedRuleContext(FunctionsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterFuncExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitFuncExpr($this);
		    }
		}
	}

	class ItemReferenceExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function itemReference(): ?ItemReferenceContext
	    {
	    	return $this->getTypedRuleContext(ItemReferenceContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterItemReferenceExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitItemReferenceExpr($this);
		    }
		}
	}

	class PropertyReferenceExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function propertyReference(): ?PropertyReferenceContext
	    {
	    	return $this->getTypedRuleContext(PropertyReferenceContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPropertyReferenceExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPropertyReferenceExpr($this);
		    }
		}
	}

	class InExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function setOperand(): ?SetOperandContext
	    {
	    	return $this->getTypedRuleContext(SetOperandContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function IN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::IN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterInExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitInExpr($this);
		    }
		}
	}

	class KeyNamesExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function keyNames(): ?KeyNamesContext
	    {
	    	return $this->getTypedRuleContext(KeyNamesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterKeyNamesExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitKeyNamesExpr($this);
		    }
		}
	}

	class ConcatExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function CONCAT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CONCAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterConcatExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitConcatExpr($this);
		    }
		}
	}

	class ParExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterParExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitParExpr($this);
		    }
		}
	}

	class UnaryExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterUnaryExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitUnaryExpr($this);
		    }
		}
	}

	class NotExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::NOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterNotExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitNotExpr($this);
		    }
		}
	}

	class SelectExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function select(): ?SelectContext
	    {
	    	return $this->getTypedRuleContext(SelectContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSelectExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSelectExpr($this);
		    }
		}
	}

	class NumericExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MULT, 0);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::DIV, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterNumericExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitNumericExpr($this);
		    }
		}
	}

	class LiteralExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterLiteralExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitLiteralExpr($this);
		    }
		}
	}

	class CompExprContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ComparisonOperatorsContext|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function comparisonOperators(): ?ComparisonOperatorsContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterCompExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitCompExpr($this);
		    }
		}
	}

	class IfExprContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $conditionalExpr
		 */
		public $conditionalExpr;

		/**
		 * @var ExpressionContext|null $thenExpr
		 */
		public $thenExpr;

		/**
		 * @var ExpressionContext|null $elseExpr
		 */
		public $elseExpr;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::IF, 0);
	    }

	    public function THEN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::THEN, 0);
	    }

	    public function ENDIF(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ENDIF, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ELSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterIfExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitIfExpr($this);
		    }
		}
	}

	class ClauseExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function SQUARE_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_LEFT, 0);
	    }

	    public function clauseOperators(): ?ClauseOperatorsContext
	    {
	    	return $this->getTypedRuleContext(ClauseOperatorsContext::class, 0);
	    }

	    public function SQUARE_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterClauseExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitClauseExpr($this);
		    }
		}
	}

	class BoolExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::AND, 0);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::OR, 0);
	    }

	    public function XOR(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::XOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterBoolExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitBoolExpr($this);
		    }
		}
	} 

	class SetOperandContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_setOperand;
	    }

	    public function CURLY_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_LEFT, 0);
	    }

	    public function setElements(): ?SetElementsContext
	    {
	    	return $this->getTypedRuleContext(SetElementsContext::class, 0);
	    }

	    public function CURLY_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSetOperand($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSetOperand($this);
		    }
		}
	} 

	class SetElementsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_setElements;
	    }

	    /**
	     * @return array<ItemReferenceContext>|ItemReferenceContext|null
	     */
	    public function itemReference(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ItemReferenceContext::class);
	    	}

	        return $this->getTypedRuleContext(ItemReferenceContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

	    /**
	     * @return array<LiteralContext>|LiteralContext|null
	     */
	    public function literal(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LiteralContext::class);
	    	}

	        return $this->getTypedRuleContext(LiteralContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSetElements($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSetElements($this);
		    }
		}
	} 

	class FunctionsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_functions;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StringFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function stringOperators(): ?StringOperatorsContext
	    {
	    	return $this->getTypedRuleContext(StringOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterStringFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitStringFunctions($this);
		    }
		}
	}

	class AggregateFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function aggregateOperators(): ?AggregateOperatorsContext
	    {
	    	return $this->getTypedRuleContext(AggregateOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterAggregateFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitAggregateFunctions($this);
		    }
		}
	}

	class ConditionalFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function conditionalOperators(): ?ConditionalOperatorsContext
	    {
	    	return $this->getTypedRuleContext(ConditionalOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterConditionalFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitConditionalFunctions($this);
		    }
		}
	}

	class ComparisonFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function comparisonFunctionOperators(): ?ComparisonFunctionOperatorsContext
	    {
	    	return $this->getTypedRuleContext(ComparisonFunctionOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterComparisonFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitComparisonFunctions($this);
		    }
		}
	}

	class NumericFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function numericOperators(): ?NumericOperatorsContext
	    {
	    	return $this->getTypedRuleContext(NumericOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterNumericFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitNumericFunctions($this);
		    }
		}
	}

	class TimeFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function timeOperators(): ?TimeOperatorsContext
	    {
	    	return $this->getTypedRuleContext(TimeOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTimeFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTimeFunctions($this);
		    }
		}
	}

	class FilterFunctionsContext extends FunctionsContext
	{
		public function __construct(FunctionsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function filterOperators(): ?FilterOperatorsContext
	    {
	    	return $this->getTypedRuleContext(FilterOperatorsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterFilterFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitFilterFunctions($this);
		    }
		}
	} 

	class NumericOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_numericOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class UnaryNumericFunctionsContext extends NumericOperatorsContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(NumericOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    public function ABS(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ABS, 0);
	    }

	    public function EXP(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::EXP, 0);
	    }

	    public function LN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LN, 0);
	    }

	    public function SQRT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQRT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterUnaryNumericFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitUnaryNumericFunctions($this);
		    }
		}
	}

	class ComplexNumericFunctionsContext extends NumericOperatorsContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(NumericOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    public function MAX(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MAX, 0);
	    }

	    public function MIN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MIN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterComplexNumericFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitComplexNumericFunctions($this);
		    }
		}
	}

	class BinaryNumericFunctionsContext extends NumericOperatorsContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(NumericOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COMMA, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function POWER(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::POWER, 0);
	    }

	    public function LOG(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LOG, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterBinaryNumericFunctions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitBinaryNumericFunctions($this);
		    }
		}
	} 

	class ComparisonFunctionOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_comparisonFunctionOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IsnullExprContext extends ComparisonFunctionOperatorsContext
	{
		public function __construct(ComparisonFunctionOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ISNULL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ISNULL, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterIsnullExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitIsnullExpr($this);
		    }
		}
	}

	class MatchExprContext extends ComparisonFunctionOperatorsContext
	{
		public function __construct(ComparisonFunctionOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MATCH(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MATCH, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COMMA, 0);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterMatchExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitMatchExpr($this);
		    }
		}
	} 

	class FilterOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_filterOperators;
	    }

	    public function FILTER(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::FILTER, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COMMA, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterFilterOperators($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitFilterOperators($this);
		    }
		}
	} 

	class TimeOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_timeOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class TimeShiftFunctionContext extends TimeOperatorsContext
	{
		public function __construct(TimeOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TIME_SHIFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TIME_SHIFT, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

	    public function TIME_PERIOD(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TIME_PERIOD, 0);
	    }

	    public function INTEGER_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::INTEGER_LITERAL, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    public function propertyCode(): ?PropertyCodeContext
	    {
	    	return $this->getTypedRuleContext(PropertyCodeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTimeShiftFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTimeShiftFunction($this);
		    }
		}
	} 

	class ConditionalOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_conditionalOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class NvlFunctionContext extends ConditionalOperatorsContext
	{
		public function __construct(ConditionalOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NVL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::NVL, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COMMA, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterNvlFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitNvlFunction($this);
		    }
		}
	} 

	class StringOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_stringOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class UnaryStringFunctionContext extends StringOperatorsContext
	{
		public function __construct(StringOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LEN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LEN, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterUnaryStringFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitUnaryStringFunction($this);
		    }
		}
	} 

	class AggregateOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_aggregateOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class CommonAggrOpContext extends AggregateOperatorsContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AggregateOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    public function MAX_AGGR(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MAX_AGGR, 0);
	    }

	    public function MIN_AGGR(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MIN_AGGR, 0);
	    }

	    public function SUM(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SUM, 0);
	    }

	    public function COUNT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COUNT, 0);
	    }

	    public function AVG(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::AVG, 0);
	    }

	    public function MEDIAN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::MEDIAN, 0);
	    }

	    public function groupingClause(): ?GroupingClauseContext
	    {
	    	return $this->getTypedRuleContext(GroupingClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterCommonAggrOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitCommonAggrOp($this);
		    }
		}
	} 

	class GroupingClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_groupingClause;
	    }

	    public function GROUP_BY(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::GROUP_BY, 0);
	    }

	    /**
	     * @return array<KeyNamesContext>|KeyNamesContext|null
	     */
	    public function keyNames(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(KeyNamesContext::class);
	    	}

	        return $this->getTypedRuleContext(KeyNamesContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterGroupingClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitGroupingClause($this);
		    }
		}
	} 

	class ItemSignatureContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_itemSignature;
	    }

	    public function ITEM_SIGNATURE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ITEM_SIGNATURE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterItemSignature($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitItemSignature($this);
		    }
		}
	} 

	class ItemReferenceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_itemReference;
	    }

	    public function SQUARE_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_LEFT, 0);
	    }

	    public function itemSignature(): ?ItemSignatureContext
	    {
	    	return $this->getTypedRuleContext(ItemSignatureContext::class, 0);
	    }

	    public function SQUARE_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterItemReference($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitItemReference($this);
		    }
		}
	} 

	class RowElemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_rowElem;
	    }

	    public function ROW(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ROW, 0);
	    }

	    public function ROW_RANGE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ROW_RANGE, 0);
	    }

	    public function ROW_ALL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ROW_ALL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterRowElem($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitRowElem($this);
		    }
		}
	} 

	class ColElemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_colElem;
	    }

	    public function COL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COL, 0);
	    }

	    public function COL_RANGE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COL_RANGE, 0);
	    }

	    public function COL_ALL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COL_ALL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterColElem($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitColElem($this);
		    }
		}
	} 

	class SheetElemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_sheetElem;
	    }

	    public function SHEET(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SHEET, 0);
	    }

	    public function SHEET_RANGE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SHEET_RANGE, 0);
	    }

	    public function SHEET_ALL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SHEET_ALL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSheetElem($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSheetElem($this);
		    }
		}
	} 

	class RowHandlerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_rowHandler;
	    }

	    public function rowElem(): ?RowElemContext
	    {
	    	return $this->getTypedRuleContext(RowElemContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ROW(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::ROW);
	    	}

	        return $this->getToken(DpmXLParser::ROW, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterRowHandler($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitRowHandler($this);
		    }
		}
	} 

	class ColHandlerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_colHandler;
	    }

	    public function colElem(): ?ColElemContext
	    {
	    	return $this->getTypedRuleContext(ColElemContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COL(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COL);
	    	}

	        return $this->getToken(DpmXLParser::COL, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterColHandler($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitColHandler($this);
		    }
		}
	} 

	class SheetHandlerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_sheetHandler;
	    }

	    public function sheetElem(): ?SheetElemContext
	    {
	    	return $this->getTypedRuleContext(SheetElemContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SHEET(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::SHEET);
	    	}

	        return $this->getToken(DpmXLParser::SHEET, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSheetHandler($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSheetHandler($this);
		    }
		}
	} 

	class IntervalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_interval;
	    }

	    public function INTERVAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::INTERVAL, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COLON, 0);
	    }

	    public function BOOLEAN_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::BOOLEAN_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterInterval($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitInterval($this);
		    }
		}
	} 

	class DefaultContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_default;
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::DEFAULT, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COLON, 0);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterDefault($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitDefault($this);
		    }
		}
	} 

	class ArgumentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_argument;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IntervalArgContext extends ArgumentContext
	{
		public function __construct(ArgumentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function interval(): ?IntervalContext
	    {
	    	return $this->getTypedRuleContext(IntervalContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterIntervalArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitIntervalArg($this);
		    }
		}
	}

	class RowArgContext extends ArgumentContext
	{
		public function __construct(ArgumentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function rowHandler(): ?RowHandlerContext
	    {
	    	return $this->getTypedRuleContext(RowHandlerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterRowArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitRowArg($this);
		    }
		}
	}

	class DefaultArgContext extends ArgumentContext
	{
		public function __construct(ArgumentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function default(): ?DefaultContext
	    {
	    	return $this->getTypedRuleContext(DefaultContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterDefaultArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitDefaultArg($this);
		    }
		}
	}

	class ColArgContext extends ArgumentContext
	{
		public function __construct(ArgumentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function colHandler(): ?ColHandlerContext
	    {
	    	return $this->getTypedRuleContext(ColHandlerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterColArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitColArg($this);
		    }
		}
	}

	class SheetArgContext extends ArgumentContext
	{
		public function __construct(ArgumentContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sheetHandler(): ?SheetHandlerContext
	    {
	    	return $this->getTypedRuleContext(SheetHandlerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSheetArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSheetArg($this);
		    }
		}
	} 

	class SelectContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_select;
	    }

	    public function CURLY_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_LEFT, 0);
	    }

	    public function selectOperand(): ?SelectOperandContext
	    {
	    	return $this->getTypedRuleContext(SelectOperandContext::class, 0);
	    }

	    public function CURLY_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSelect($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSelect($this);
		    }
		}
	} 

	class SelectOperandContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_selectOperand;
	    }

	    public function cellRef(): ?CellRefContext
	    {
	    	return $this->getTypedRuleContext(CellRefContext::class, 0);
	    }

	    public function varRef(): ?VarRefContext
	    {
	    	return $this->getTypedRuleContext(VarRefContext::class, 0);
	    }

	    public function operationRef(): ?OperationRefContext
	    {
	    	return $this->getTypedRuleContext(OperationRefContext::class, 0);
	    }

	    public function preconditionElem(): ?PreconditionElemContext
	    {
	    	return $this->getTypedRuleContext(PreconditionElemContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterSelectOperand($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitSelectOperand($this);
		    }
		}
	} 

	class VarIDContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_varID;
	    }

	    public function CURLY_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_LEFT, 0);
	    }

	    public function varRef(): ?VarRefContext
	    {
	    	return $this->getTypedRuleContext(VarRefContext::class, 0);
	    }

	    public function CURLY_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CURLY_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterVarID($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitVarID($this);
		    }
		}
	} 

	class CellRefContext extends ParserRuleContext
	{
		/**
		 * @var CellAddressContext|null $address
		 */
		public $address;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_cellRef;
	    }

	    public function cellAddress(): ?CellAddressContext
	    {
	    	return $this->getTypedRuleContext(CellAddressContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterCellRef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitCellRef($this);
		    }
		}
	} 

	class PreconditionElemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_preconditionElem;
	    }

	    public function PRECONDITION_ELEMENT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::PRECONDITION_ELEMENT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPreconditionElem($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPreconditionElem($this);
		    }
		}
	} 

	class VarRefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_varRef;
	    }

	    public function VAR_REFERENCE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::VAR_REFERENCE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterVarRef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitVarRef($this);
		    }
		}
	} 

	class OperationRefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_operationRef;
	    }

	    public function OPERATION_REFERENCE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::OPERATION_REFERENCE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterOperationRef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitOperationRef($this);
		    }
		}
	} 

	class CellAddressContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_cellAddress;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class CompRefContext extends CellAddressContext
	{
		public function __construct(CellAddressContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ArgumentContext>|ArgumentContext|null
	     */
	    public function argument(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArgumentContext::class);
	    	}

	        return $this->getTypedRuleContext(ArgumentContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterCompRef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitCompRef($this);
		    }
		}
	}

	class TableRefContext extends CellAddressContext
	{
		public function __construct(CellAddressContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function tableReference(): ?TableReferenceContext
	    {
	    	return $this->getTypedRuleContext(TableReferenceContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

	    /**
	     * @return array<ArgumentContext>|ArgumentContext|null
	     */
	    public function argument(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArgumentContext::class);
	    	}

	        return $this->getTypedRuleContext(ArgumentContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTableRef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTableRef($this);
		    }
		}
	} 

	class TableReferenceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_tableReference;
	    }

	    public function TABLE_REFERENCE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TABLE_REFERENCE, 0);
	    }

	    public function TABLE_GROUP_REFERENCE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TABLE_GROUP_REFERENCE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTableReference($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTableReference($this);
		    }
		}
	} 

	class ClauseOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_clauseOperators;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class RenameExprContext extends ClauseOperatorsContext
	{
		public function __construct(ClauseOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RENAME(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::RENAME, 0);
	    }

	    /**
	     * @return array<RenameClauseContext>|RenameClauseContext|null
	     */
	    public function renameClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RenameClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(RenameClauseContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(DpmXLParser::COMMA);
	    	}

	        return $this->getToken(DpmXLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterRenameExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitRenameExpr($this);
		    }
		}
	}

	class WhereExprContext extends ClauseOperatorsContext
	{
		public function __construct(ClauseOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function WHERE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::WHERE, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterWhereExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitWhereExpr($this);
		    }
		}
	}

	class GetExprContext extends ClauseOperatorsContext
	{
		public function __construct(ClauseOperatorsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function GET(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::GET, 0);
	    }

	    public function keyNames(): ?KeyNamesContext
	    {
	    	return $this->getTypedRuleContext(KeyNamesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterGetExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitGetExpr($this);
		    }
		}
	} 

	class RenameClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_renameClause;
	    }

	    /**
	     * @return array<KeyNamesContext>|KeyNamesContext|null
	     */
	    public function keyNames(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(KeyNamesContext::class);
	    	}

	        return $this->getTypedRuleContext(KeyNamesContext::class, $index);
	    }

	    public function TO(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TO, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterRenameClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitRenameClause($this);
		    }
		}
	} 

	class ComparisonOperatorsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_comparisonOperators;
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::EQ, 0);
	    }

	    public function NE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::NE, 0);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::GT, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LT, 0);
	    }

	    public function GE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::GE, 0);
	    }

	    public function LE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::LE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterComparisonOperators($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitComparisonOperators($this);
		    }
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_literal;
	    }

	    public function INTEGER_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::INTEGER_LITERAL, 0);
	    }

	    public function DECIMAL_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::DECIMAL_LITERAL, 0);
	    }

	    public function PERCENT_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::PERCENT_LITERAL, 0);
	    }

	    public function STRING_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::STRING_LITERAL, 0);
	    }

	    public function BOOLEAN_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::BOOLEAN_LITERAL, 0);
	    }

	    public function DATE_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::DATE_LITERAL, 0);
	    }

	    public function TIME_INTERVAL_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TIME_INTERVAL_LITERAL, 0);
	    }

	    public function TIME_PERIOD_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::TIME_PERIOD_LITERAL, 0);
	    }

	    public function EMPTY_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::EMPTY_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitLiteral($this);
		    }
		}
	} 

	class KeyNamesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_keyNames;
	    }

	    public function ROW_HEADING(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::ROW_HEADING, 0);
	    }

	    public function COL_HEADING(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::COL_HEADING, 0);
	    }

	    public function SHEET_HEADING(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SHEET_HEADING, 0);
	    }

	    public function propertyCode(): ?PropertyCodeContext
	    {
	    	return $this->getTypedRuleContext(PropertyCodeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterKeyNames($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitKeyNames($this);
		    }
		}
	} 

	class PropertyReferenceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_propertyReference;
	    }

	    public function SQUARE_BRACKET_LEFT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_LEFT, 0);
	    }

	    public function propertyCode(): ?PropertyCodeContext
	    {
	    	return $this->getTypedRuleContext(PropertyCodeContext::class, 0);
	    }

	    public function SQUARE_BRACKET_RIGHT(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::SQUARE_BRACKET_RIGHT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPropertyReference($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPropertyReference($this);
		    }
		}
	} 

	class PropertyCodeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_propertyCode;
	    }

	    public function CODE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CODE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterPropertyCode($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitPropertyCode($this);
		    }
		}
	} 

	class TemporaryIdentifierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return DpmXLParser::RULE_temporaryIdentifier;
	    }

	    public function CODE(): ?TerminalNode
	    {
	        return $this->getToken(DpmXLParser::CODE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->enterTemporaryIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof DpmXLParserListener) {
			    $listener->exitTemporaryIdentifier($this);
		    }
		}
	} 
}