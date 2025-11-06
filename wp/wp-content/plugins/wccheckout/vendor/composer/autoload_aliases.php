<?php

// Functions and constants

namespace {

}


namespace CheckoutWC {

    class AliasAutoloader
    {
        private string $includeFilePath;

        private array $autoloadAliases = array (
  'Pelago\\Emogrifier\\Caching\\SimpleStringCache' => 
  array (
    'type' => 'class',
    'classname' => 'SimpleStringCache',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Caching',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Caching\\SimpleStringCache',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Css\\CssDocument' => 
  array (
    'type' => 'class',
    'classname' => 'CssDocument',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Css',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Css\\CssDocument',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Css\\StyleRule' => 
  array (
    'type' => 'class',
    'classname' => 'StyleRule',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Css',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Css\\StyleRule',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\CssInliner' => 
  array (
    'type' => 'class',
    'classname' => 'CssInliner',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\CssInliner',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\HtmlProcessor\\AbstractHtmlProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractHtmlProcessor',
    'isabstract' => true,
    'namespace' => 'Pelago\\Emogrifier\\HtmlProcessor',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\HtmlProcessor\\AbstractHtmlProcessor',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\HtmlProcessor\\CssToAttributeConverter' => 
  array (
    'type' => 'class',
    'classname' => 'CssToAttributeConverter',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\HtmlProcessor',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\HtmlProcessor\\CssToAttributeConverter',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\HtmlProcessor\\CssVariableEvaluator' => 
  array (
    'type' => 'class',
    'classname' => 'CssVariableEvaluator',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\HtmlProcessor',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\HtmlProcessor\\CssVariableEvaluator',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\HtmlProcessor\\HtmlNormalizer' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlNormalizer',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\HtmlProcessor',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\HtmlProcessor\\HtmlNormalizer',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\HtmlProcessor\\HtmlPruner' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlPruner',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\HtmlProcessor',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\HtmlProcessor\\HtmlPruner',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Utilities\\ArrayIntersector' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayIntersector',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Utilities',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Utilities\\ArrayIntersector',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Utilities\\CssConcatenator' => 
  array (
    'type' => 'class',
    'classname' => 'CssConcatenator',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Utilities',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Utilities\\CssConcatenator',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Utilities\\DeclarationBlockParser' => 
  array (
    'type' => 'class',
    'classname' => 'DeclarationBlockParser',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Utilities',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Utilities\\DeclarationBlockParser',
    'implements' => 
    array (
    ),
  ),
  'Pelago\\Emogrifier\\Utilities\\Preg' => 
  array (
    'type' => 'class',
    'classname' => 'Preg',
    'isabstract' => false,
    'namespace' => 'Pelago\\Emogrifier\\Utilities',
    'extends' => 'CheckoutWC\\Pelago\\Emogrifier\\Utilities\\Preg',
    'implements' => 
    array (
    ),
  ),
  'Pressmodo\\AdminNotices\\Dismiss' => 
  array (
    'type' => 'class',
    'classname' => 'Dismiss',
    'isabstract' => false,
    'namespace' => 'Pressmodo\\AdminNotices',
    'extends' => 'CheckoutWC\\Pressmodo\\AdminNotices\\Dismiss',
    'implements' => 
    array (
    ),
  ),
  'Pressmodo\\AdminNotices\\Notice' => 
  array (
    'type' => 'class',
    'classname' => 'Notice',
    'isabstract' => false,
    'namespace' => 'Pressmodo\\AdminNotices',
    'extends' => 'CheckoutWC\\Pressmodo\\AdminNotices\\Notice',
    'implements' => 
    array (
    ),
  ),
  'Pressmodo\\AdminNotices\\Notices' => 
  array (
    'type' => 'class',
    'classname' => 'Notices',
    'isabstract' => false,
    'namespace' => 'Pressmodo\\AdminNotices',
    'extends' => 'CheckoutWC\\Pressmodo\\AdminNotices\\Notices',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\AbstractLogger' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractLogger',
    'isabstract' => true,
    'namespace' => 'Psr\\Log',
    'extends' => 'CheckoutWC\\Psr\\Log\\AbstractLogger',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
    ),
  ),
  'Psr\\Log\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'CheckoutWC\\Psr\\Log\\InvalidArgumentException',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\LogLevel' => 
  array (
    'type' => 'class',
    'classname' => 'LogLevel',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'CheckoutWC\\Psr\\Log\\LogLevel',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\NullLogger' => 
  array (
    'type' => 'class',
    'classname' => 'NullLogger',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'CheckoutWC\\Psr\\Log\\NullLogger',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\Test\\DummyTest' => 
  array (
    'type' => 'class',
    'classname' => 'DummyTest',
    'isabstract' => false,
    'namespace' => 'Psr\\Log\\Test',
    'extends' => 'CheckoutWC\\Psr\\Log\\Test\\DummyTest',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\Test\\LoggerInterfaceTest' => 
  array (
    'type' => 'class',
    'classname' => 'LoggerInterfaceTest',
    'isabstract' => true,
    'namespace' => 'Psr\\Log\\Test',
    'extends' => 'CheckoutWC\\Psr\\Log\\Test\\LoggerInterfaceTest',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\Test\\TestLogger' => 
  array (
    'type' => 'class',
    'classname' => 'TestLogger',
    'isabstract' => false,
    'namespace' => 'Psr\\Log\\Test',
    'extends' => 'CheckoutWC\\Psr\\Log\\Test\\TestLogger',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => 
  array (
    'type' => 'class',
    'classname' => 'AtRuleBlockList',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\CSSList',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\CSSList\\AtRuleBlockList',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
    ),
  ),
  'Sabberworm\\CSS\\CSSList\\CSSBlockList' => 
  array (
    'type' => 'class',
    'classname' => 'CSSBlockList',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\CSSList',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\CSSList\\CSSBlockList',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\CSSList\\CSSList' => 
  array (
    'type' => 'class',
    'classname' => 'CSSList',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\CSSList',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\CSSList\\CSSList',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Comment\\Commentable',
      1 => 'Sabberworm\\CSS\\CSSElement',
      2 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\CSSList\\Document' => 
  array (
    'type' => 'class',
    'classname' => 'Document',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\CSSList',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\CSSList\\Document',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\CSSList\\KeyFrame' => 
  array (
    'type' => 'class',
    'classname' => 'KeyFrame',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\CSSList',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\CSSList\\KeyFrame',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
    ),
  ),
  'Sabberworm\\CSS\\Comment\\Comment' => 
  array (
    'type' => 'class',
    'classname' => 'Comment',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Comment',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Comment\\Comment',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Position\\Positionable',
      1 => 'Sabberworm\\CSS\\Renderable',
    ),
  ),
  'Sabberworm\\CSS\\OutputFormat' => 
  array (
    'type' => 'class',
    'classname' => 'OutputFormat',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\OutputFormat',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\OutputFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'OutputFormatter',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\OutputFormatter',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parser' => 
  array (
    'type' => 'class',
    'classname' => 'Parser',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parser',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\Anchor' => 
  array (
    'type' => 'class',
    'classname' => 'Anchor',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\Anchor',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\OutputException' => 
  array (
    'type' => 'class',
    'classname' => 'OutputException',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\OutputException',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\ParserState' => 
  array (
    'type' => 'class',
    'classname' => 'ParserState',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\ParserState',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\SourceException' => 
  array (
    'type' => 'class',
    'classname' => 'SourceException',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\SourceException',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\UnexpectedEOFException' => 
  array (
    'type' => 'class',
    'classname' => 'UnexpectedEOFException',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\UnexpectedEOFException',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => 
  array (
    'type' => 'class',
    'classname' => 'UnexpectedTokenException',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Parsing',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Parsing\\UnexpectedTokenException',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Property\\CSSNamespace' => 
  array (
    'type' => 'class',
    'classname' => 'CSSNamespace',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Property\\CSSNamespace',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
      1 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Property\\Charset' => 
  array (
    'type' => 'class',
    'classname' => 'Charset',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Property\\Charset',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
      1 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Property\\Import' => 
  array (
    'type' => 'class',
    'classname' => 'Import',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Property\\Import',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
      1 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Property\\KeyframeSelector' => 
  array (
    'type' => 'class',
    'classname' => 'KeyframeSelector',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Property\\KeyframeSelector',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Property\\Selector' => 
  array (
    'type' => 'class',
    'classname' => 'Selector',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Property\\Selector',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Rule\\Rule' => 
  array (
    'type' => 'class',
    'classname' => 'Rule',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Rule',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Rule\\Rule',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Comment\\Commentable',
      1 => 'Sabberworm\\CSS\\CSSElement',
      2 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => 
  array (
    'type' => 'class',
    'classname' => 'AtRuleSet',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\RuleSet',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\RuleSet\\AtRuleSet',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\Property\\AtRule',
    ),
  ),
  'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => 
  array (
    'type' => 'class',
    'classname' => 'DeclarationBlock',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\RuleSet',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\RuleSet\\DeclarationBlock',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\RuleSet\\RuleSet' => 
  array (
    'type' => 'class',
    'classname' => 'RuleSet',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\RuleSet',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\RuleSet\\RuleSet',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\CSSElement',
      1 => 'Sabberworm\\CSS\\Comment\\Commentable',
      2 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Settings' => 
  array (
    'type' => 'class',
    'classname' => 'Settings',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Settings',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\CSSFunction' => 
  array (
    'type' => 'class',
    'classname' => 'CSSFunction',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\CSSFunction',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\CSSString' => 
  array (
    'type' => 'class',
    'classname' => 'CSSString',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\CSSString',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\CalcFunction' => 
  array (
    'type' => 'class',
    'classname' => 'CalcFunction',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\CalcFunction',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\CalcRuleValueList' => 
  array (
    'type' => 'class',
    'classname' => 'CalcRuleValueList',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\CalcRuleValueList',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\Color' => 
  array (
    'type' => 'class',
    'classname' => 'Color',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\Color',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\LineName' => 
  array (
    'type' => 'class',
    'classname' => 'LineName',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\LineName',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\PrimitiveValue' => 
  array (
    'type' => 'class',
    'classname' => 'PrimitiveValue',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\PrimitiveValue',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\RuleValueList' => 
  array (
    'type' => 'class',
    'classname' => 'RuleValueList',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\RuleValueList',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\Size' => 
  array (
    'type' => 'class',
    'classname' => 'Size',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\Size',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\URL' => 
  array (
    'type' => 'class',
    'classname' => 'URL',
    'isabstract' => false,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\URL',
    'implements' => 
    array (
    ),
  ),
  'Sabberworm\\CSS\\Value\\Value' => 
  array (
    'type' => 'class',
    'classname' => 'Value',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\Value',
    'implements' => 
    array (
      0 => 'Sabberworm\\CSS\\CSSElement',
      1 => 'Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Value\\ValueList' => 
  array (
    'type' => 'class',
    'classname' => 'ValueList',
    'isabstract' => true,
    'namespace' => 'Sabberworm\\CSS\\Value',
    'extends' => 'CheckoutWC\\Sabberworm\\CSS\\Value\\ValueList',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\ArrayUtil' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayUtil',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\ArrayUtil',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Batch' => 
  array (
    'type' => 'class',
    'classname' => 'Batch',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Batch',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\ClientBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'ClientBuilder',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\ClientBuilder',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\BadCredentialsException' => 
  array (
    'type' => 'class',
    'classname' => 'BadCredentialsException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\BadCredentialsException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\BadGatewayException' => 
  array (
    'type' => 'class',
    'classname' => 'BadGatewayException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\BadGatewayException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\BadRequestException' => 
  array (
    'type' => 'class',
    'classname' => 'BadRequestException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\BadRequestException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\BatchFullException' => 
  array (
    'type' => 'class',
    'classname' => 'BatchFullException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\BatchFullException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\GatewayTimeoutException' => 
  array (
    'type' => 'class',
    'classname' => 'GatewayTimeoutException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\GatewayTimeoutException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\InternalServerErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'InternalServerErrorException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\InternalServerErrorException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\MustRetryException' => 
  array (
    'type' => 'class',
    'classname' => 'MustRetryException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\MustRetryException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\PaymentRequiredException' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentRequiredException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\PaymentRequiredException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\RequestEntityTooLargeException' => 
  array (
    'type' => 'class',
    'classname' => 'RequestEntityTooLargeException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\RequestEntityTooLargeException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\RequestNotModifiedException' => 
  array (
    'type' => 'class',
    'classname' => 'RequestNotModifiedException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\RequestNotModifiedException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\RequestTimeoutException' => 
  array (
    'type' => 'class',
    'classname' => 'RequestTimeoutException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\RequestTimeoutException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\ServiceUnavailableException' => 
  array (
    'type' => 'class',
    'classname' => 'ServiceUnavailableException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\ServiceUnavailableException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\SmartyException' => 
  array (
    'type' => 'class',
    'classname' => 'SmartyException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\SmartyException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\TooManyRequestsException' => 
  array (
    'type' => 'class',
    'classname' => 'TooManyRequestsException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\TooManyRequestsException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Exceptions\\UnprocessableEntityException' => 
  array (
    'type' => 'class',
    'classname' => 'UnprocessableEntityException',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\Exceptions',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Exceptions\\UnprocessableEntityException',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Autocomplete\\Candidate' => 
  array (
    'type' => 'class',
    'classname' => 'Candidate',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Autocomplete',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Autocomplete\\Candidate',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Autocomplete\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Autocomplete',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Autocomplete\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Autocomplete\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Autocomplete',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Autocomplete\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Autocomplete\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Autocomplete',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Autocomplete\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Analysis' => 
  array (
    'type' => 'class',
    'classname' => 'Analysis',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Analysis',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Candidate' => 
  array (
    'type' => 'class',
    'classname' => 'Candidate',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Candidate',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Changes' => 
  array (
    'type' => 'class',
    'classname' => 'Changes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Changes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Components' => 
  array (
    'type' => 'class',
    'classname' => 'Components',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Components',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\LanguageMode' => 
  array (
    'type' => 'class',
    'classname' => 'LanguageMode',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\LanguageMode',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\Metadata' => 
  array (
    'type' => 'class',
    'classname' => 'Metadata',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\Metadata',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\International_Street\\RootLevel' => 
  array (
    'type' => 'class',
    'classname' => 'RootLevel',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\International_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\International_Street\\RootLevel',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\LicenseSender' => 
  array (
    'type' => 'class',
    'classname' => 'LicenseSender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\LicenseSender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\MyLogger' => 
  array (
    'type' => 'class',
    'classname' => 'MyLogger',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\MyLogger',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Logger',
    ),
  ),
  'SmartyStreets\\PhpSdk\\MySleeper' => 
  array (
    'type' => 'class',
    'classname' => 'MySleeper',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\MySleeper',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sleeper',
    ),
  ),
  'SmartyStreets\\PhpSdk\\NativeSender' => 
  array (
    'type' => 'class',
    'classname' => 'NativeSender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\NativeSender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\NativeSerializer' => 
  array (
    'type' => 'class',
    'classname' => 'NativeSerializer',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\NativeSerializer',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Serializer',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Proxy' => 
  array (
    'type' => 'class',
    'classname' => 'Proxy',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Proxy',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Psr3Logger' => 
  array (
    'type' => 'class',
    'classname' => 'Psr3Logger',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Psr3Logger',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Logger',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Request' => 
  array (
    'type' => 'class',
    'classname' => 'Request',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Request',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Response',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\RetrySender' => 
  array (
    'type' => 'class',
    'classname' => 'RetrySender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\RetrySender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\SharedCredentials' => 
  array (
    'type' => 'class',
    'classname' => 'SharedCredentials',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\SharedCredentials',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Credentials',
    ),
  ),
  'SmartyStreets\\PhpSdk\\SigningSender' => 
  array (
    'type' => 'class',
    'classname' => 'SigningSender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\SigningSender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\StaticCredentials' => 
  array (
    'type' => 'class',
    'classname' => 'StaticCredentials',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\StaticCredentials',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Credentials',
    ),
  ),
  'SmartyStreets\\PhpSdk\\StatusCodeSender' => 
  array (
    'type' => 'class',
    'classname' => 'StatusCodeSender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\StatusCodeSender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\URLPrefixSender' => 
  array (
    'type' => 'class',
    'classname' => 'URLPrefixSender',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\URLPrefixSender',
    'implements' => 
    array (
      0 => 'SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\GeolocateType' => 
  array (
    'type' => 'class',
    'classname' => 'GeolocateType',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\GeolocateType',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Suggestion' => 
  array (
    'type' => 'class',
    'classname' => 'Suggestion',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Suggestion',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\FinancialAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'FinancialAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\FinancialAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\FinancialHistoryEntry' => 
  array (
    'type' => 'class',
    'classname' => 'FinancialHistoryEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\FinancialHistoryEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusBlockEntry' => 
  array (
    'type' => 'class',
    'classname' => 'CensusBlockEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusBlockEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusCountyDivisionEntry' => 
  array (
    'type' => 'class',
    'classname' => 'CensusCountyDivisionEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusCountyDivisionEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusTractEntry' => 
  array (
    'type' => 'class',
    'classname' => 'CensusTractEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CensusTractEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CoreBasedStatAreaEntry' => 
  array (
    'type' => 'class',
    'classname' => 'CoreBasedStatAreaEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\CoreBasedStatAreaEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\PlaceEntry' => 
  array (
    'type' => 'class',
    'classname' => 'PlaceEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReference\\PlaceEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReferenceAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'GeoReferenceAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\GeoReferenceAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\MatchedAddress' => 
  array (
    'type' => 'class',
    'classname' => 'MatchedAddress',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\MatchedAddress',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\PrincipalAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'PrincipalAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\PrincipalAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\RiskAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'RiskAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\RiskAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\AliasesEntry' => 
  array (
    'type' => 'class',
    'classname' => 'AliasesEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\AliasesEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\RootAddressEntry' => 
  array (
    'type' => 'class',
    'classname' => 'RootAddressEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\RootAddressEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\SecondariesEntry' => 
  array (
    'type' => 'class',
    'classname' => 'SecondariesEntry',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\Secondary\\SecondariesEntry',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\SecondaryAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'SecondaryAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\SecondaryAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Enrichment\\SecondaryCountAttributes' => 
  array (
    'type' => 'class',
    'classname' => 'SecondaryCountAttributes',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Enrichment',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Enrichment\\SecondaryCountAttributes',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Extract\\Address' => 
  array (
    'type' => 'class',
    'classname' => 'Address',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Extract',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Extract\\Address',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Extract\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Extract',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Extract\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Extract\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Extract',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Extract\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Extract\\Metadata' => 
  array (
    'type' => 'class',
    'classname' => 'Metadata',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Extract',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Extract\\Metadata',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Extract\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Extract',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Extract\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Address' => 
  array (
    'type' => 'class',
    'classname' => 'Address',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Address',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Coordinate' => 
  array (
    'type' => 'class',
    'classname' => 'Coordinate',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Coordinate',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Lookup',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Response',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Reverse_Geo',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Analysis' => 
  array (
    'type' => 'class',
    'classname' => 'Analysis',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Analysis',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Candidate' => 
  array (
    'type' => 'class',
    'classname' => 'Candidate',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Candidate',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Components' => 
  array (
    'type' => 'class',
    'classname' => 'Components',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Components',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Lookup',
    'implements' => 
    array (
      0 => 'JsonSerializable',
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_Street\\Metadata' => 
  array (
    'type' => 'class',
    'classname' => 'Metadata',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_Street',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_Street\\Metadata',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\AlternateCounties' => 
  array (
    'type' => 'class',
    'classname' => 'AlternateCounties',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\AlternateCounties',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\City' => 
  array (
    'type' => 'class',
    'classname' => 'City',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\City',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\Client',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\Lookup' => 
  array (
    'type' => 'class',
    'classname' => 'Lookup',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\Lookup',
    'implements' => 
    array (
      0 => 'JsonSerializable',
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\Result' => 
  array (
    'type' => 'class',
    'classname' => 'Result',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\Result',
    'implements' => 
    array (
    ),
  ),
  'SmartyStreets\\PhpSdk\\US_ZIPCode\\ZIPCode' => 
  array (
    'type' => 'class',
    'classname' => 'ZIPCode',
    'isabstract' => false,
    'namespace' => 'SmartyStreets\\PhpSdk\\US_ZIPCode',
    'extends' => 'CheckoutWC\\SmartyStreets\\PhpSdk\\US_ZIPCode\\ZIPCode',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Installer\\Assets' => 
  array (
    'type' => 'class',
    'classname' => 'Assets',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Assets',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Installer\\Button' => 
  array (
    'type' => 'class',
    'classname' => 'Button',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Button',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Installer\\Config' => 
  array (
    'type' => 'class',
    'classname' => 'Config',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Config',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Installer\\Handler\\Plugin' => 
  array (
    'type' => 'class',
    'classname' => 'Plugin',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer\\Handler',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Handler\\Plugin',
    'implements' => 
    array (
      0 => 'StellarWP\\Installer\\Contracts\\Handler',
    ),
  ),
  'StellarWP\\Installer\\Installer' => 
  array (
    'type' => 'class',
    'classname' => 'Installer',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Installer',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Installer\\Utils\\Array_Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Array_Utils',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Installer\\Utils',
    'extends' => 'CheckoutWC\\StellarWP\\Installer\\Utils\\Array_Utils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\CssSelectorConverter' => 
  array (
    'type' => 'class',
    'classname' => 'CssSelectorConverter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\CssSelectorConverter',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'ExpressionErrorException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Exception\\InternalErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'InternalErrorException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Exception\\InternalErrorException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Exception\\ParseException' => 
  array (
    'type' => 'class',
    'classname' => 'ParseException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Exception\\ParseException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'SyntaxErrorException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\AbstractNode' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractNode',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\AbstractNode',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Node\\NodeInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\AttributeNode' => 
  array (
    'type' => 'class',
    'classname' => 'AttributeNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\AttributeNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\ClassNode' => 
  array (
    'type' => 'class',
    'classname' => 'ClassNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\ClassNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode' => 
  array (
    'type' => 'class',
    'classname' => 'CombinedSelectorNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\ElementNode' => 
  array (
    'type' => 'class',
    'classname' => 'ElementNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\ElementNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\FunctionNode' => 
  array (
    'type' => 'class',
    'classname' => 'FunctionNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\FunctionNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\HashNode' => 
  array (
    'type' => 'class',
    'classname' => 'HashNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\HashNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\NegationNode' => 
  array (
    'type' => 'class',
    'classname' => 'NegationNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\NegationNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\PseudoNode' => 
  array (
    'type' => 'class',
    'classname' => 'PseudoNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\PseudoNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\SelectorNode' => 
  array (
    'type' => 'class',
    'classname' => 'SelectorNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\SelectorNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\Specificity' => 
  array (
    'type' => 'class',
    'classname' => 'Specificity',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\Specificity',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\CommentHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CommentHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\CommentHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\HashHandler' => 
  array (
    'type' => 'class',
    'classname' => 'HashHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\HashHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\IdentifierHandler' => 
  array (
    'type' => 'class',
    'classname' => 'IdentifierHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\IdentifierHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NumberHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\StringHandler' => 
  array (
    'type' => 'class',
    'classname' => 'StringHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\StringHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\WhitespaceHandler' => 
  array (
    'type' => 'class',
    'classname' => 'WhitespaceHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\WhitespaceHandler',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Parser' => 
  array (
    'type' => 'class',
    'classname' => 'Parser',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Parser',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Reader' => 
  array (
    'type' => 'class',
    'classname' => 'Reader',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Reader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser' => 
  array (
    'type' => 'class',
    'classname' => 'ClassParser',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Shortcut',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser' => 
  array (
    'type' => 'class',
    'classname' => 'ElementParser',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Shortcut',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser' => 
  array (
    'type' => 'class',
    'classname' => 'EmptyStringParser',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Shortcut',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser' => 
  array (
    'type' => 'class',
    'classname' => 'HashParser',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Shortcut',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Token' => 
  array (
    'type' => 'class',
    'classname' => 'Token',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Token',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\TokenStream' => 
  array (
    'type' => 'class',
    'classname' => 'TokenStream',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\TokenStream',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer' => 
  array (
    'type' => 'class',
    'classname' => 'Tokenizer',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Tokenizer',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping' => 
  array (
    'type' => 'class',
    'classname' => 'TokenizerEscaping',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Tokenizer',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns' => 
  array (
    'type' => 'class',
    'classname' => 'TokenizerPatterns',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Tokenizer',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\AbstractExtension' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractExtension',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\AbstractExtension',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\AttributeMatchingExtension' => 
  array (
    'type' => 'class',
    'classname' => 'AttributeMatchingExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\AttributeMatchingExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\CombinationExtension' => 
  array (
    'type' => 'class',
    'classname' => 'CombinationExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\CombinationExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\FunctionExtension' => 
  array (
    'type' => 'class',
    'classname' => 'FunctionExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\FunctionExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\NodeExtension' => 
  array (
    'type' => 'class',
    'classname' => 'NodeExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\NodeExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\PseudoClassExtension' => 
  array (
    'type' => 'class',
    'classname' => 'PseudoClassExtension',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\PseudoClassExtension',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Translator' => 
  array (
    'type' => 'class',
    'classname' => 'Translator',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Translator',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\XPathExpr' => 
  array (
    'type' => 'class',
    'classname' => 'XPathExpr',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath',
    'extends' => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\XPathExpr',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\InvalidArgumentException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\InvalidTtlException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidTtlException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\InvalidTtlException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\LockAcquiringException' => 
  array (
    'type' => 'class',
    'classname' => 'LockAcquiringException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\LockAcquiringException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\LockConflictedException' => 
  array (
    'type' => 'class',
    'classname' => 'LockConflictedException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\LockConflictedException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\LockExpiredException' => 
  array (
    'type' => 'class',
    'classname' => 'LockExpiredException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\LockExpiredException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\LockReleasingException' => 
  array (
    'type' => 'class',
    'classname' => 'LockReleasingException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\LockReleasingException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\LockStorageException' => 
  array (
    'type' => 'class',
    'classname' => 'LockStorageException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\LockStorageException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\UnserializableKeyException' => 
  array (
    'type' => 'class',
    'classname' => 'UnserializableKeyException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\UnserializableKeyException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Key' => 
  array (
    'type' => 'class',
    'classname' => 'Key',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Key',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Lock\\Lock' => 
  array (
    'type' => 'class',
    'classname' => 'Lock',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Lock',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\SharedLockInterface',
      1 => 'Psr\\Log\\LoggerAwareInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\LockFactory' => 
  array (
    'type' => 'class',
    'classname' => 'LockFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\LockFactory',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerAwareInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\NoLock' => 
  array (
    'type' => 'class',
    'classname' => 'NoLock',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\NoLock',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\LockInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\CombinedStore' => 
  array (
    'type' => 'class',
    'classname' => 'CombinedStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\CombinedStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\SharedLockStoreInterface',
      1 => 'Psr\\Log\\LoggerAwareInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\DoctrineDbalPostgreSqlStore' => 
  array (
    'type' => 'class',
    'classname' => 'DoctrineDbalPostgreSqlStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\DoctrineDbalPostgreSqlStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\BlockingSharedLockStoreInterface',
      1 => 'Symfony\\Component\\Lock\\BlockingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\DoctrineDbalStore' => 
  array (
    'type' => 'class',
    'classname' => 'DoctrineDbalStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\DoctrineDbalStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\FlockStore' => 
  array (
    'type' => 'class',
    'classname' => 'FlockStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\FlockStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\BlockingStoreInterface',
      1 => 'Symfony\\Component\\Lock\\SharedLockStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\InMemoryStore' => 
  array (
    'type' => 'class',
    'classname' => 'InMemoryStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\InMemoryStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\SharedLockStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\MemcachedStore' => 
  array (
    'type' => 'class',
    'classname' => 'MemcachedStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\MemcachedStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\MongoDbStore' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDbStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\MongoDbStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\PdoStore' => 
  array (
    'type' => 'class',
    'classname' => 'PdoStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\PdoStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\PostgreSqlStore' => 
  array (
    'type' => 'class',
    'classname' => 'PostgreSqlStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\PostgreSqlStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\BlockingSharedLockStoreInterface',
      1 => 'Symfony\\Component\\Lock\\BlockingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\RedisStore' => 
  array (
    'type' => 'class',
    'classname' => 'RedisStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\RedisStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\SharedLockStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\SemaphoreStore' => 
  array (
    'type' => 'class',
    'classname' => 'SemaphoreStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\SemaphoreStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\BlockingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\StoreFactory' => 
  array (
    'type' => 'class',
    'classname' => 'StoreFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\StoreFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\ZookeeperStore' => 
  array (
    'type' => 'class',
    'classname' => 'ZookeeperStore',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\ZookeeperStore',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Strategy\\ConsensusStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'ConsensusStrategy',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Strategy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Strategy\\ConsensusStrategy',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Strategy\\StrategyInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Strategy\\UnanimousStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'UnanimousStrategy',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Lock\\Strategy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\Lock\\Strategy\\UnanimousStrategy',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Lock\\Strategy\\StrategyInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => 
  array (
    'type' => 'class',
    'classname' => 'OptionsResolverIntrospector',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Debug',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => 
  array (
    'type' => 'class',
    'classname' => 'AccessException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\AccessException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidOptionsException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => 
  array (
    'type' => 'class',
    'classname' => 'MissingOptionsException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => 
  array (
    'type' => 'class',
    'classname' => 'NoConfigurationException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => 
  array (
    'type' => 'class',
    'classname' => 'NoSuchOptionException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => 
  array (
    'type' => 'class',
    'classname' => 'OptionDefinitionException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => 
  array (
    'type' => 'class',
    'classname' => 'UndefinedOptionsException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\OptionConfigurator' => 
  array (
    'type' => 'class',
    'classname' => 'OptionConfigurator',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\OptionConfigurator',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\OptionsResolver' => 
  array (
    'type' => 'class',
    'classname' => 'OptionsResolver',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\OptionsResolver',
    'extends' => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\OptionsResolver',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\OptionsResolver\\Options',
    ),
  ),
  'Symfony\\Polyfill\\Php80\\Php80' => 
  array (
    'type' => 'class',
    'classname' => 'Php80',
    'isabstract' => false,
    'namespace' => 'Symfony\\Polyfill\\Php80',
    'extends' => 'CheckoutWC\\Symfony\\Polyfill\\Php80\\Php80',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Polyfill\\Php80\\PhpToken' => 
  array (
    'type' => 'class',
    'classname' => 'PhpToken',
    'isabstract' => false,
    'namespace' => 'Symfony\\Polyfill\\Php80',
    'extends' => 'CheckoutWC\\Symfony\\Polyfill\\Php80\\PhpToken',
    'implements' => 
    array (
      0 => 'Stringable',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\CompoundLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'CompoundLimiter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\CompoundLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Exception\\InvalidIntervalException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidIntervalException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Exception\\InvalidIntervalException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Exception\\MaxWaitDurationExceededException' => 
  array (
    'type' => 'class',
    'classname' => 'MaxWaitDurationExceededException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Exception\\MaxWaitDurationExceededException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Exception\\RateLimitExceededException' => 
  array (
    'type' => 'class',
    'classname' => 'RateLimitExceededException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Exception\\RateLimitExceededException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Exception\\ReserveNotSupportedException' => 
  array (
    'type' => 'class',
    'classname' => 'ReserveNotSupportedException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Exception',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Exception\\ReserveNotSupportedException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\FixedWindowLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'FixedWindowLimiter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\FixedWindowLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\NoLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'NoLimiter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\NoLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\Rate' => 
  array (
    'type' => 'class',
    'classname' => 'Rate',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\Rate',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\SlidingWindow' => 
  array (
    'type' => 'class',
    'classname' => 'SlidingWindow',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\SlidingWindow',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterStateInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\SlidingWindowLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'SlidingWindowLimiter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\SlidingWindowLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\TokenBucket' => 
  array (
    'type' => 'class',
    'classname' => 'TokenBucket',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\TokenBucket',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterStateInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\TokenBucketLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'TokenBucketLimiter',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\TokenBucketLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\Window' => 
  array (
    'type' => 'class',
    'classname' => 'Window',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\Window',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\LimiterStateInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\RateLimit' => 
  array (
    'type' => 'class',
    'classname' => 'RateLimit',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\RateLimit',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\RateLimiterFactory' => 
  array (
    'type' => 'class',
    'classname' => 'RateLimiterFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\RateLimiterFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Reservation' => 
  array (
    'type' => 'class',
    'classname' => 'Reservation',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Reservation',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Storage\\CacheStorage' => 
  array (
    'type' => 'class',
    'classname' => 'CacheStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Storage',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Storage\\CacheStorage',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\Storage\\StorageInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Storage\\InMemoryStorage' => 
  array (
    'type' => 'class',
    'classname' => 'InMemoryStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Storage',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Storage\\InMemoryStorage',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\RateLimiter\\Storage\\StorageInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Util\\TimeUtil' => 
  array (
    'type' => 'class',
    'classname' => 'TimeUtil',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\RateLimiter\\Util',
    'extends' => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Util\\TimeUtil',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\LoggerAwareTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'LoggerAwareTrait',
    'namespace' => 'Psr\\Log',
    'use' => 
    array (
      0 => 'CheckoutWC\\Psr\\Log\\LoggerAwareTrait',
    ),
  ),
  'Psr\\Log\\LoggerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'LoggerTrait',
    'namespace' => 'Psr\\Log',
    'use' => 
    array (
      0 => 'CheckoutWC\\Psr\\Log\\LoggerTrait',
    ),
  ),
  'Sabberworm\\CSS\\Position\\Position' => 
  array (
    'type' => 'trait',
    'traitname' => 'Position',
    'namespace' => 'Sabberworm\\CSS\\Position',
    'use' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\Position\\Position',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\DatabaseTableTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'DatabaseTableTrait',
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'use' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\DatabaseTableTrait',
    ),
  ),
  'Symfony\\Component\\Lock\\Store\\ExpiringStoreTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'ExpiringStoreTrait',
    'namespace' => 'Symfony\\Component\\Lock\\Store',
    'use' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\Store\\ExpiringStoreTrait',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Policy\\ResetLimiterTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'ResetLimiterTrait',
    'namespace' => 'Symfony\\Component\\RateLimiter\\Policy',
    'use' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Policy\\ResetLimiterTrait',
    ),
  ),
  'Psr\\Log\\LoggerAwareInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoggerAwareInterface',
    'namespace' => 'Psr\\Log',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Psr\\Log\\LoggerAwareInterface',
    ),
  ),
  'Psr\\Log\\LoggerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoggerInterface',
    'namespace' => 'Psr\\Log',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Psr\\Log\\LoggerInterface',
    ),
  ),
  'Sabberworm\\CSS\\CSSElement' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CSSElement',
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\CSSElement',
    ),
  ),
  'Sabberworm\\CSS\\Comment\\Commentable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Commentable',
    'namespace' => 'Sabberworm\\CSS\\Comment',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\Comment\\Commentable',
    ),
  ),
  'Sabberworm\\CSS\\Position\\Positionable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Positionable',
    'namespace' => 'Sabberworm\\CSS\\Position',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\Position\\Positionable',
    ),
  ),
  'Sabberworm\\CSS\\Property\\AtRule' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AtRule',
    'namespace' => 'Sabberworm\\CSS\\Property',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\Property\\AtRule',
    ),
  ),
  'Sabberworm\\CSS\\Renderable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Renderable',
    'namespace' => 'Sabberworm\\CSS',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Sabberworm\\CSS\\Renderable',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Credentials' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Credentials',
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 
    array (
      0 => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Credentials',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Logger' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Logger',
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 
    array (
      0 => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Logger',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Sender' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Sender',
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 
    array (
      0 => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Sender',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Serializer' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Serializer',
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 
    array (
      0 => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Serializer',
    ),
  ),
  'SmartyStreets\\PhpSdk\\Sleeper' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Sleeper',
    'namespace' => 'SmartyStreets\\PhpSdk',
    'extends' => 
    array (
      0 => 'CheckoutWC\\SmartyStreets\\PhpSdk\\Sleeper',
    ),
  ),
  'StellarWP\\Installer\\Contracts\\Handler' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Handler',
    'namespace' => 'StellarWP\\Installer\\Contracts',
    'extends' => 
    array (
      0 => 'CheckoutWC\\StellarWP\\Installer\\Contracts\\Handler',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExceptionInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\Exception',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Node\\NodeInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\Node',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Node\\NodeInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HandlerInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser\\Handler',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\Parser\\ParserInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParserInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\Parser',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\Parser\\ParserInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExtensionInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath\\Extension',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface',
    ),
  ),
  'Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TranslatorInterface',
    'namespace' => 'Symfony\\Component\\CssSelector\\XPath',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\BlockingSharedLockStoreInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BlockingSharedLockStoreInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\BlockingSharedLockStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\BlockingStoreInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BlockingStoreInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\BlockingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Exception\\ExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExceptionInterface',
    'namespace' => 'Symfony\\Component\\Lock\\Exception',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\LockInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LockInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\LockInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\PersistingStoreInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PersistingStoreInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\PersistingStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\SharedLockInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SharedLockInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\SharedLockInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\SharedLockStoreInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SharedLockStoreInterface',
    'namespace' => 'Symfony\\Component\\Lock',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\SharedLockStoreInterface',
    ),
  ),
  'Symfony\\Component\\Lock\\Strategy\\StrategyInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StrategyInterface',
    'namespace' => 'Symfony\\Component\\Lock\\Strategy',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\Lock\\Strategy\\StrategyInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExceptionInterface',
    'namespace' => 'Symfony\\Component\\OptionsResolver\\Exception',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\OptionsResolver\\Options' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Options',
    'namespace' => 'Symfony\\Component\\OptionsResolver',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\OptionsResolver\\Options',
    ),
  ),
  'Stringable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Stringable',
    'namespace' => '\\',
    'extends' => 
    array (
      0 => 'CheckoutWC_Stringable',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\LimiterInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LimiterInterface',
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\LimiterInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\LimiterStateInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LimiterStateInterface',
    'namespace' => 'Symfony\\Component\\RateLimiter',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\LimiterStateInterface',
    ),
  ),
  'Symfony\\Component\\RateLimiter\\Storage\\StorageInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StorageInterface',
    'namespace' => 'Symfony\\Component\\RateLimiter\\Storage',
    'extends' => 
    array (
      0 => 'CheckoutWC\\Symfony\\Component\\RateLimiter\\Storage\\StorageInterface',
    ),
  ),
);

        public function __construct()
        {
            $this->includeFilePath = __DIR__ . '/autoload_alias.php';
        }

        public function autoload($class)
        {
            if (!isset($this->autoloadAliases[$class])) {
                return;
            }
            switch ($this->autoloadAliases[$class]['type']) {
                case 'class':
                        $this->load(
                            $this->classTemplate(
                                $this->autoloadAliases[$class]
                            )
                        );
                    break;
                case 'interface':
                    $this->load(
                        $this->interfaceTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'trait':
                    $this->load(
                        $this->traitTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                default:
                    // Never.
                    break;
            }
        }

        private function load(string $includeFile)
        {
            file_put_contents($this->includeFilePath, $includeFile);
            include $this->includeFilePath;
            file_exists($this->includeFilePath) && unlink($this->includeFilePath);
        }

        private function classTemplate(array $class): string
        {
            $abstract = $class['isabstract'] ? 'abstract ' : '';
            $classname = $class['classname'];
            if (isset($class['namespace'])) {
                $namespace = "namespace {$class['namespace']};";
                $extends = '\\' . $class['extends'];
                $implements = empty($class['implements']) ? ''
                : ' implements \\' . implode(', \\', $class['implements']);
            } else {
                $namespace = '';
                $extends = $class['extends'];
                $implements = !empty($class['implements']) ? ''
                : ' implements ' . implode(', ', $class['implements']);
            }
            return <<<EOD
                <?php
                $namespace
                $abstract class $classname extends $extends $implements {}
                EOD;
        }

        private function interfaceTemplate(array $interface): string
        {
            $interfacename = $interface['interfacename'];
            $namespace = isset($interface['namespace'])
            ? "namespace {$interface['namespace']};" : '';
            $extends = isset($interface['namespace'])
            ? '\\' . implode('\\ ,', $interface['extends'])
            : implode(', ', $interface['extends']);
            return <<<EOD
                <?php
                $namespace
                interface $interfacename extends $extends {}
                EOD;
        }
        private function traitTemplate(array $trait): string
        {
            $traitname = $trait['traitname'];
            $namespace = isset($trait['namespace'])
            ? "namespace {$trait['namespace']};" : '';
            $uses = isset($trait['namespace'])
            ? '\\' . implode(';' . PHP_EOL . '    use \\', $trait['use'])
            : implode(';' . PHP_EOL . '    use ', $trait['use']);
            return <<<EOD
                <?php
                $namespace
                trait $traitname { 
                    use $uses; 
                }
                EOD;
        }
    }

    spl_autoload_register([ new AliasAutoloader(), 'autoload' ]);
}
