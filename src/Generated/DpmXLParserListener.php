<?php

/*
 * Generated from ./dpm_xlParser.g4 by ANTLR 4.13.2
 */

namespace Artemeon\DpmXLParser\Generated;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see DpmXLParser}.
 */
interface DpmXLParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::start()}.
	 * @param $context The parse tree.
	 */
	public function enterStart(Context\StartContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::start()}.
	 * @param $context The parse tree.
	 */
	public function exitStart(Context\StartContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::statements()}.
	 * @param $context The parse tree.
	 */
	public function enterStatements(Context\StatementsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::statements()}.
	 * @param $context The parse tree.
	 */
	public function exitStatements(Context\StatementsContext $context): void;
	/**
	 * Enter a parse tree produced by the `exprWithoutAssignment`
	 * labeled alternative in {@see DpmXLParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterExprWithoutAssignment(Context\ExprWithoutAssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by the `exprWithoutAssignment` labeled alternative
	 * in {@see DpmXLParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitExprWithoutAssignment(Context\ExprWithoutAssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by the `assignmentExpr`
	 * labeled alternative in {@see DpmXLParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentExpr(Context\AssignmentExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `assignmentExpr` labeled alternative
	 * in {@see DpmXLParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentExpr(Context\AssignmentExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::persistentExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterPersistentExpression(Context\PersistentExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::persistentExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitPersistentExpression(Context\PersistentExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `exprWithoutPartialSelection`
	 * labeled alternative in {@see DpmXLParser::expressionWithoutAssignment()}.
	 * @param $context The parse tree.
	 */
	public function enterExprWithoutPartialSelection(Context\ExprWithoutPartialSelectionContext $context): void;
	/**
	 * Exit a parse tree produced by the `exprWithoutPartialSelection` labeled alternative
	 * in {@see DpmXLParser::expressionWithoutAssignment()}.
	 * @param $context The parse tree.
	 */
	public function exitExprWithoutPartialSelection(Context\ExprWithoutPartialSelectionContext $context): void;
	/**
	 * Enter a parse tree produced by the `exprWithSelection`
	 * labeled alternative in {@see DpmXLParser::expressionWithoutAssignment()}.
	 * @param $context The parse tree.
	 */
	public function enterExprWithSelection(Context\ExprWithSelectionContext $context): void;
	/**
	 * Exit a parse tree produced by the `exprWithSelection` labeled alternative
	 * in {@see DpmXLParser::expressionWithoutAssignment()}.
	 * @param $context The parse tree.
	 */
	public function exitExprWithSelection(Context\ExprWithSelectionContext $context): void;
	/**
	 * Enter a parse tree produced by the `partialSelect`
	 * labeled alternative in {@see DpmXLParser::partialSelection()}.
	 * @param $context The parse tree.
	 */
	public function enterPartialSelect(Context\PartialSelectContext $context): void;
	/**
	 * Exit a parse tree produced by the `partialSelect` labeled alternative
	 * in {@see DpmXLParser::partialSelection()}.
	 * @param $context The parse tree.
	 */
	public function exitPartialSelect(Context\PartialSelectContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::temporaryAssignmentExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterTemporaryAssignmentExpression(Context\TemporaryAssignmentExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::temporaryAssignmentExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitTemporaryAssignmentExpression(Context\TemporaryAssignmentExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::persistentAssignmentExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterPersistentAssignmentExpression(Context\PersistentAssignmentExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::persistentAssignmentExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitPersistentAssignmentExpression(Context\PersistentAssignmentExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `funcExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncExpr(Context\FuncExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `funcExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncExpr(Context\FuncExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `itemReferenceExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterItemReferenceExpr(Context\ItemReferenceExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `itemReferenceExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitItemReferenceExpr(Context\ItemReferenceExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `propertyReferenceExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertyReferenceExpr(Context\PropertyReferenceExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `propertyReferenceExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertyReferenceExpr(Context\PropertyReferenceExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `inExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterInExpr(Context\InExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `inExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitInExpr(Context\InExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `keyNamesExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyNamesExpr(Context\KeyNamesExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `keyNamesExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyNamesExpr(Context\KeyNamesExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `concatExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterConcatExpr(Context\ConcatExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `concatExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitConcatExpr(Context\ConcatExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `parExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterParExpr(Context\ParExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `parExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitParExpr(Context\ParExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `unaryExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpr(Context\UnaryExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `unaryExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpr(Context\UnaryExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `notExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNotExpr(Context\NotExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `notExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNotExpr(Context\NotExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `selectExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectExpr(Context\SelectExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `selectExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectExpr(Context\SelectExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `numericExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNumericExpr(Context\NumericExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `numericExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNumericExpr(Context\NumericExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `literalExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralExpr(Context\LiteralExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `literalExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralExpr(Context\LiteralExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `compExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCompExpr(Context\CompExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `compExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCompExpr(Context\CompExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ifExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIfExpr(Context\IfExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ifExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIfExpr(Context\IfExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `clauseExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterClauseExpr(Context\ClauseExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `clauseExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitClauseExpr(Context\ClauseExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `boolExpr`
	 * labeled alternative in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolExpr(Context\BoolExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `boolExpr` labeled alternative
	 * in {@see DpmXLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolExpr(Context\BoolExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::setOperand()}.
	 * @param $context The parse tree.
	 */
	public function enterSetOperand(Context\SetOperandContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::setOperand()}.
	 * @param $context The parse tree.
	 */
	public function exitSetOperand(Context\SetOperandContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::setElements()}.
	 * @param $context The parse tree.
	 */
	public function enterSetElements(Context\SetElementsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::setElements()}.
	 * @param $context The parse tree.
	 */
	public function exitSetElements(Context\SetElementsContext $context): void;
	/**
	 * Enter a parse tree produced by the `aggregateFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterAggregateFunctions(Context\AggregateFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `aggregateFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitAggregateFunctions(Context\AggregateFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `numericFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterNumericFunctions(Context\NumericFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `numericFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitNumericFunctions(Context\NumericFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `comparisonFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonFunctions(Context\ComparisonFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `comparisonFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonFunctions(Context\ComparisonFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `filterFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterFilterFunctions(Context\FilterFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `filterFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitFilterFunctions(Context\FilterFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `conditionalFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterConditionalFunctions(Context\ConditionalFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `conditionalFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitConditionalFunctions(Context\ConditionalFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `timeFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterTimeFunctions(Context\TimeFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `timeFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitTimeFunctions(Context\TimeFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `stringFunctions`
	 * labeled alternative in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function enterStringFunctions(Context\StringFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `stringFunctions` labeled alternative
	 * in {@see DpmXLParser::functions()}.
	 * @param $context The parse tree.
	 */
	public function exitStringFunctions(Context\StringFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `unaryNumericFunctions`
	 * labeled alternative in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryNumericFunctions(Context\UnaryNumericFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `unaryNumericFunctions` labeled alternative
	 * in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryNumericFunctions(Context\UnaryNumericFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `binaryNumericFunctions`
	 * labeled alternative in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryNumericFunctions(Context\BinaryNumericFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `binaryNumericFunctions` labeled alternative
	 * in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryNumericFunctions(Context\BinaryNumericFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `complexNumericFunctions`
	 * labeled alternative in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterComplexNumericFunctions(Context\ComplexNumericFunctionsContext $context): void;
	/**
	 * Exit a parse tree produced by the `complexNumericFunctions` labeled alternative
	 * in {@see DpmXLParser::numericOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitComplexNumericFunctions(Context\ComplexNumericFunctionsContext $context): void;
	/**
	 * Enter a parse tree produced by the `matchExpr`
	 * labeled alternative in {@see DpmXLParser::comparisonFunctionOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterMatchExpr(Context\MatchExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `matchExpr` labeled alternative
	 * in {@see DpmXLParser::comparisonFunctionOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitMatchExpr(Context\MatchExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `isnullExpr`
	 * labeled alternative in {@see DpmXLParser::comparisonFunctionOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterIsnullExpr(Context\IsnullExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `isnullExpr` labeled alternative
	 * in {@see DpmXLParser::comparisonFunctionOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitIsnullExpr(Context\IsnullExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::filterOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterFilterOperators(Context\FilterOperatorsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::filterOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitFilterOperators(Context\FilterOperatorsContext $context): void;
	/**
	 * Enter a parse tree produced by the `timeShiftFunction`
	 * labeled alternative in {@see DpmXLParser::timeOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterTimeShiftFunction(Context\TimeShiftFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `timeShiftFunction` labeled alternative
	 * in {@see DpmXLParser::timeOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitTimeShiftFunction(Context\TimeShiftFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `nvlFunction`
	 * labeled alternative in {@see DpmXLParser::conditionalOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterNvlFunction(Context\NvlFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `nvlFunction` labeled alternative
	 * in {@see DpmXLParser::conditionalOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitNvlFunction(Context\NvlFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `unaryStringFunction`
	 * labeled alternative in {@see DpmXLParser::stringOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryStringFunction(Context\UnaryStringFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `unaryStringFunction` labeled alternative
	 * in {@see DpmXLParser::stringOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryStringFunction(Context\UnaryStringFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `commonAggrOp`
	 * labeled alternative in {@see DpmXLParser::aggregateOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterCommonAggrOp(Context\CommonAggrOpContext $context): void;
	/**
	 * Exit a parse tree produced by the `commonAggrOp` labeled alternative
	 * in {@see DpmXLParser::aggregateOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitCommonAggrOp(Context\CommonAggrOpContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::groupingClause()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupingClause(Context\GroupingClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::groupingClause()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupingClause(Context\GroupingClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::itemSignature()}.
	 * @param $context The parse tree.
	 */
	public function enterItemSignature(Context\ItemSignatureContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::itemSignature()}.
	 * @param $context The parse tree.
	 */
	public function exitItemSignature(Context\ItemSignatureContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::itemReference()}.
	 * @param $context The parse tree.
	 */
	public function enterItemReference(Context\ItemReferenceContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::itemReference()}.
	 * @param $context The parse tree.
	 */
	public function exitItemReference(Context\ItemReferenceContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::rowElem()}.
	 * @param $context The parse tree.
	 */
	public function enterRowElem(Context\RowElemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::rowElem()}.
	 * @param $context The parse tree.
	 */
	public function exitRowElem(Context\RowElemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::colElem()}.
	 * @param $context The parse tree.
	 */
	public function enterColElem(Context\ColElemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::colElem()}.
	 * @param $context The parse tree.
	 */
	public function exitColElem(Context\ColElemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::sheetElem()}.
	 * @param $context The parse tree.
	 */
	public function enterSheetElem(Context\SheetElemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::sheetElem()}.
	 * @param $context The parse tree.
	 */
	public function exitSheetElem(Context\SheetElemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::rowHandler()}.
	 * @param $context The parse tree.
	 */
	public function enterRowHandler(Context\RowHandlerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::rowHandler()}.
	 * @param $context The parse tree.
	 */
	public function exitRowHandler(Context\RowHandlerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::colHandler()}.
	 * @param $context The parse tree.
	 */
	public function enterColHandler(Context\ColHandlerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::colHandler()}.
	 * @param $context The parse tree.
	 */
	public function exitColHandler(Context\ColHandlerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::sheetHandler()}.
	 * @param $context The parse tree.
	 */
	public function enterSheetHandler(Context\SheetHandlerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::sheetHandler()}.
	 * @param $context The parse tree.
	 */
	public function exitSheetHandler(Context\SheetHandlerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::interval()}.
	 * @param $context The parse tree.
	 */
	public function enterInterval(Context\IntervalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::interval()}.
	 * @param $context The parse tree.
	 */
	public function exitInterval(Context\IntervalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::default()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault(Context\DefaultContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::default()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault(Context\DefaultContext $context): void;
	/**
	 * Enter a parse tree produced by the `rowArg`
	 * labeled alternative in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterRowArg(Context\RowArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `rowArg` labeled alternative
	 * in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitRowArg(Context\RowArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `colArg`
	 * labeled alternative in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterColArg(Context\ColArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `colArg` labeled alternative
	 * in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitColArg(Context\ColArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `sheetArg`
	 * labeled alternative in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterSheetArg(Context\SheetArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `sheetArg` labeled alternative
	 * in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitSheetArg(Context\SheetArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `intervalArg`
	 * labeled alternative in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalArg(Context\IntervalArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `intervalArg` labeled alternative
	 * in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalArg(Context\IntervalArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `defaultArg`
	 * labeled alternative in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultArg(Context\DefaultArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `defaultArg` labeled alternative
	 * in {@see DpmXLParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultArg(Context\DefaultArgContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::select()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect(Context\SelectContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::select()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect(Context\SelectContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::selectOperand()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectOperand(Context\SelectOperandContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::selectOperand()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectOperand(Context\SelectOperandContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::varID()}.
	 * @param $context The parse tree.
	 */
	public function enterVarID(Context\VarIDContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::varID()}.
	 * @param $context The parse tree.
	 */
	public function exitVarID(Context\VarIDContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::cellRef()}.
	 * @param $context The parse tree.
	 */
	public function enterCellRef(Context\CellRefContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::cellRef()}.
	 * @param $context The parse tree.
	 */
	public function exitCellRef(Context\CellRefContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::preconditionElem()}.
	 * @param $context The parse tree.
	 */
	public function enterPreconditionElem(Context\PreconditionElemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::preconditionElem()}.
	 * @param $context The parse tree.
	 */
	public function exitPreconditionElem(Context\PreconditionElemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::varRef()}.
	 * @param $context The parse tree.
	 */
	public function enterVarRef(Context\VarRefContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::varRef()}.
	 * @param $context The parse tree.
	 */
	public function exitVarRef(Context\VarRefContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::operationRef()}.
	 * @param $context The parse tree.
	 */
	public function enterOperationRef(Context\OperationRefContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::operationRef()}.
	 * @param $context The parse tree.
	 */
	public function exitOperationRef(Context\OperationRefContext $context): void;
	/**
	 * Enter a parse tree produced by the `tableRef`
	 * labeled alternative in {@see DpmXLParser::cellAddress()}.
	 * @param $context The parse tree.
	 */
	public function enterTableRef(Context\TableRefContext $context): void;
	/**
	 * Exit a parse tree produced by the `tableRef` labeled alternative
	 * in {@see DpmXLParser::cellAddress()}.
	 * @param $context The parse tree.
	 */
	public function exitTableRef(Context\TableRefContext $context): void;
	/**
	 * Enter a parse tree produced by the `compRef`
	 * labeled alternative in {@see DpmXLParser::cellAddress()}.
	 * @param $context The parse tree.
	 */
	public function enterCompRef(Context\CompRefContext $context): void;
	/**
	 * Exit a parse tree produced by the `compRef` labeled alternative
	 * in {@see DpmXLParser::cellAddress()}.
	 * @param $context The parse tree.
	 */
	public function exitCompRef(Context\CompRefContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::tableReference()}.
	 * @param $context The parse tree.
	 */
	public function enterTableReference(Context\TableReferenceContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::tableReference()}.
	 * @param $context The parse tree.
	 */
	public function exitTableReference(Context\TableReferenceContext $context): void;
	/**
	 * Enter a parse tree produced by the `whereExpr`
	 * labeled alternative in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterWhereExpr(Context\WhereExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `whereExpr` labeled alternative
	 * in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitWhereExpr(Context\WhereExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `getExpr`
	 * labeled alternative in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterGetExpr(Context\GetExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `getExpr` labeled alternative
	 * in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitGetExpr(Context\GetExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `renameExpr`
	 * labeled alternative in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameExpr(Context\RenameExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `renameExpr` labeled alternative
	 * in {@see DpmXLParser::clauseOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameExpr(Context\RenameExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::renameClause()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameClause(Context\RenameClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::renameClause()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameClause(Context\RenameClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::comparisonOperators()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonOperators(Context\ComparisonOperatorsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::comparisonOperators()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonOperators(Context\ComparisonOperatorsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::keyNames()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyNames(Context\KeyNamesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::keyNames()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyNames(Context\KeyNamesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::propertyReference()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertyReference(Context\PropertyReferenceContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::propertyReference()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertyReference(Context\PropertyReferenceContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::propertyCode()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertyCode(Context\PropertyCodeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::propertyCode()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertyCode(Context\PropertyCodeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see DpmXLParser::temporaryIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function enterTemporaryIdentifier(Context\TemporaryIdentifierContext $context): void;
	/**
	 * Exit a parse tree produced by {@see DpmXLParser::temporaryIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function exitTemporaryIdentifier(Context\TemporaryIdentifierContext $context): void;
}