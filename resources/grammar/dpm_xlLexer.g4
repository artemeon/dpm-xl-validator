lexer grammar dpm_xlLexer;

// ------------ Individual tokens -----------

// Boolean
BOOLEAN_LITERAL:
    'true'
    | 'false'
    ;

AND:                    'and';
OR:                     'or';
XOR:                    'xor';

NOT:                    'not';

// Assign
ASSIGN:                 ':=';
PERSISTENT_ASSIGN:      '<-';

// Comparison
EQ:                     '=';
NE:                     '!=';
LT:                     '<';
LE:                     '<=';
GT:                     '>';
GE:                     '>=';

// Matches
MATCH:                'match';

// With
WITH:                   'with';

// Arithmetic
PLUS:                   '+';
MINUS:                  '-';
MULT:                   '*';
DIV:                    '/';

// Aggregate
MAX_AGGR:                       'max_aggr';
MIN_AGGR:                       'min_aggr';
SUM:                            'sum';
COUNT:                          'count';
AVG:                            'avg';
MEDIAN:                         'median';

// Grouping
GROUP_BY:               'group by';

// Unary
ABS:                    'abs';
ISNULL:                 'isnull';
EXP:                    'exp';
LN:                     'ln';
SQRT:                   'sqrt';

// Binary
POWER:                          'power';
LOG:                            'log';

MAX:                            'max';
MIN:                            'min';

// Belonging
IN:                     'in' -> pushMode(SET_OPERAND_MODE);

// Punctuation elements
COMMA:                  ',';
COLON:                  ':';

// Parenthesis
LPAREN:                 '(';
RPAREN:                 ')';


// Brackets
CURLY_BRACKET_LEFT:     '{' -> pushMode(SELECTION_MODE);
CURLY_BRACKET_RIGHT:    '}';
SQUARE_BRACKET_LEFT:    '[';
SQUARE_BRACKET_RIGHT:   ']';


// Conditional
IF:                     'if';
ENDIF:                  'endif';
THEN:                   'then';
ELSE:                   'else';
NVL:                    'nvl';

// Filter
FILTER:                 'filter';

// Clause
WHERE:                  'where';
GET:                    'get';
RENAME:                 'rename';
TO:                     'to';

// Reference date
TIME_SHIFT:             'time_shift';

// String
LEN:                    'len';
CONCAT:                 '&';

// Regex

// Prefix
ROW_HEADING:            'r';
COL_HEADING:            'c';
SHEET_HEADING:          's';

// Time periods

TIME_PERIOD:            'A'
                        | 'S'
                        | 'Q'
                        | 'M'
                        | 'W'
                        | 'D'
                        ;

ITEM_SIGNATURE:             [A-Za-z]([A-Za-z0-9_-]*[:][A-Za-z0-9_-]*[A-Za-z0-9])+;

// End of line
EOL:                    ';';


// ------------ Literals ---------------
fragment
DIGITS0_9:              '0'..'9';
fragment
DIGITS1_9:              '1'..'9';

INTEGER_LITERAL:        DIGITS0_9+
                        | LPAREN MINUS DIGITS0_9+ RPAREN;
DECIMAL_LITERAL:        INTEGER_LITERAL '.' INTEGER_LITERAL;
PERCENT_LITERAL:        INTEGER_LITERAL '%'
                        | DECIMAL_LITERAL '%'
                        ;
STRING_LITERAL:         '"' (~'"')+ '"' | '\'' (~'\'')+ '\'';
EMPTY_LITERAL:          '\'\'' | '""';

CODE:          [A-Za-z]([A-Za-z0-9_.]*[A-Za-z0-9])*;

fragment
YEAR:                   DIGITS0_9 DIGITS0_9 DIGITS0_9 DIGITS0_9;

fragment
MONTH:                  '0' DIGITS1_9
                        | '1' [0-2]
                        ;

fragment
WEEK:                   '0' DIGITS1_9
                        | [1-4] DIGITS0_9
                        | '5' [0-2]
                        ;

fragment
DAY:                    [0-2] DIGITS0_9
                        | '3' [0-1];

fragment
HOURS:                  [0-1] DIGITS0_9
                        | '2' [0-3]
                        ;

fragment
MINUTES:                [0-5] DIGITS0_9;

fragment
SECONDS:                [0-5] DIGITS0_9;

fragment
DATE_FORMAT:            YEAR '-' MONTH '-' DAY ('T' HOURS COLON MINUTES COLON SECONDS)?;

fragment
TIME_PERIOD_FORMAT:     YEAR 'A'?
                        | YEAR 'D' [0-3] DIGITS0_9 DIGITS0_9
                        | YEAR 'W' WEEK
                        | YEAR 'M' MONTH
                        | YEAR 'Q' [1-4]
                        | YEAR 'S' [1-2]
                        ;

DATE_LITERAL:           '#' DATE_FORMAT '#';

TIME_INTERVAL_LITERAL:  '#' DATE_FORMAT '/' DATE_FORMAT '#';

TIME_PERIOD_LITERAL:    '#' TIME_PERIOD_FORMAT '#';

WS:                     [ \t\r\n\u000C]+ -> channel(2);


mode SELECTION_MODE;

SELECTION_MODE_COMMA:        COMMA -> type(COMMA);
SELECTION_MODE_COLON:        COLON -> type(COLON);

SELECTION_MODE_LPAREN:                 LPAREN -> type(LPAREN);
SELECTION_MODE_RPAREN:                 RPAREN -> type(RPAREN);

SELECTION_MODE_CURLY_BRACKET_RIGHT:    CURLY_BRACKET_RIGHT -> popMode, type(CURLY_BRACKET_RIGHT);

INTERVAL: 'interval';
DEFAULT: 'default';

SELECTION_MODE_BOOLEAN_LITERAL: BOOLEAN_LITERAL -> type(BOOLEAN_LITERAL);

// Prefix

fragment
ROW_PREFIX:            ROW_HEADING;
fragment
COL_PREFIX:            COL_HEADING;
fragment
SHEET_PREFIX:          SHEET_HEADING;
fragment
TABLE_PREFIX:           't';
fragment
TABLE_GROUP_PREFIX:     'g';

fragment
VAR_REF_PREFIX:         'v';
fragment
OPERATION_REF_PREFIX:   'o';
fragment
PRECONDITION_PREFIX:      'v_';


// Codes

fragment
TABLE_CODE:                 [A-Za-z]([A-Za-z0-9_.-]*[A-Za-z0-9])*
                            | [A-Za-z]+([ ][0-9])?([A-Za-z0-9_.-]*[A-Za-z0-9])*
                            ;
fragment
CELL_COMPONENT_CODE:        [0-9A-Za-z]+;
fragment
CELL_COMPONENT_RANGE:       CELL_COMPONENT_CODE [-] CELL_COMPONENT_CODE;

fragment
VAR_CODE:               [A-Za-z]([A-Za-z0-9_.]*[A-Za-z0-9])*;
fragment
OPERATION_CODE:         [A-Za-z]([A-Za-z0-9_.]*[A-Za-z0-9])*;

ROW:                    ROW_PREFIX CELL_COMPONENT_CODE;
ROW_RANGE:              ROW_PREFIX CELL_COMPONENT_RANGE;
ROW_ALL:                ROW_PREFIX [*];

COL:                    COL_PREFIX CELL_COMPONENT_CODE;
COL_RANGE:              COL_PREFIX CELL_COMPONENT_RANGE;
COL_ALL:                COL_PREFIX [*];

SHEET:                  SHEET_PREFIX CELL_COMPONENT_CODE;
SHEET_RANGE:            SHEET_PREFIX CELL_COMPONENT_RANGE;
SHEET_ALL:              SHEET_PREFIX [*];

TABLE_REFERENCE:        TABLE_PREFIX TABLE_CODE;
TABLE_GROUP_REFERENCE:  TABLE_GROUP_PREFIX TABLE_CODE;

VAR_REFERENCE:                VAR_REF_PREFIX VAR_CODE;
OPERATION_REFERENCE:          OPERATION_REF_PREFIX OPERATION_CODE;
PRECONDITION_ELEMENT:         PRECONDITION_PREFIX TABLE_CODE;

SELECTION_MODE_INTEGER_LITERAL: INTEGER_LITERAL -> type(INTEGER_LITERAL);
SELECTION_MODE_DECIMAL_LITERAL: DECIMAL_LITERAL -> type(DECIMAL_LITERAL);
SELECTION_MODE_PERCENT_LITERAL: PERCENT_LITERAL -> type(PERCENT_LITERAL);

SELECTION_MODE_STRING_LITERAL: STRING_LITERAL -> type(STRING_LITERAL);
SELECTION_MODE_EMPTY_LITERAL: EMPTY_LITERAL -> type(EMPTY_LITERAL);

SELECTION_MODE_DATE_LITERAL: DATE_LITERAL -> type(DATE_LITERAL);
SELECTION_MODE_TIME_INTERVAL_LITERAL: TIME_INTERVAL_LITERAL -> type(TIME_INTERVAL_LITERAL);
SELECTION_MODE_TIME_PERIOD_LITERAL: TIME_PERIOD_LITERAL -> type(TIME_PERIOD_LITERAL);

SELECTION_MODE_WS:        WS -> channel(2);


mode SET_OPERAND_MODE;

SET_OPERAND_MODE_COMMA:        COMMA -> type(COMMA);

SET_OPERAND_MODE_CURLY_BRACKET_LEFT:     CURLY_BRACKET_LEFT -> type(CURLY_BRACKET_LEFT);
SET_OPERAND_MODE_CURLY_BRACKET_RIGHT:    CURLY_BRACKET_RIGHT -> popMode, type(CURLY_BRACKET_RIGHT);

SET_OPERAND_MODE_SQUARE_BRACKET_LEFT:    SQUARE_BRACKET_LEFT -> type(SQUARE_BRACKET_LEFT);
SET_OPERAND_MODE_SQUARE_BRACKET_RIGHT:   SQUARE_BRACKET_RIGHT -> type(SQUARE_BRACKET_RIGHT);

SET_OPERAND_MODE_ITEM_SIGNATURE:             ITEM_SIGNATURE -> type(ITEM_SIGNATURE);

SET_OPERAND_MODE_INTEGER_LITERAL: INTEGER_LITERAL -> type(INTEGER_LITERAL);
SET_OPERAND_MODE_DECIMAL_LITERAL: DECIMAL_LITERAL -> type(DECIMAL_LITERAL);
SET_OPERAND_MODE_PERCENT_LITERAL: PERCENT_LITERAL -> type(PERCENT_LITERAL);

SET_OPERAND_MODE_STRING_LITERAL: STRING_LITERAL -> type(STRING_LITERAL);
SET_OPERAND_MODE_EMPTY_LITERAL: EMPTY_LITERAL -> type(EMPTY_LITERAL);

SET_OPERAND_MODE_DATE_LITERAL: DATE_LITERAL -> type(DATE_LITERAL);
SET_OPERAND_MODE_TIME_INTERVAL_LITERAL: TIME_INTERVAL_LITERAL -> type(TIME_INTERVAL_LITERAL);
SET_OPERAND_MODE_TIME_PERIOD_LITERAL: TIME_PERIOD_LITERAL -> type(TIME_PERIOD_LITERAL);

SET_OPERAND_MODE_WS:        WS -> channel(2);
