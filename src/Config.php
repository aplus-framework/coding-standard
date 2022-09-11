<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework Coding Standard Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\CodingStandard;

/**
 * Class Config.
 *
 * @package coding-standard
 */
class Config extends \PhpCsFixer\Config
{
    public function __construct(mixed ...$params)
    {
        parent::__construct(...$params);
        $this->setRiskyAllowed(true);
        $this->setIndent('    ');
        $this->setLineEnding("\n");
        $this->setCacheFile('.php-cs-fixer.cache');
        $this->prepareRules();
    }

    protected function prepareRules() : void
    {
        $this->setRules([
            'align_multiline_comment' => true,
            'array_indentation' => false,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'assign_null_coalescing_to_coalesce_equal' => true,
            'binary_operator_spaces' => [
                'default' => 'single_space',
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => false,
            'blank_line_before_statement' => false,
            'braces' => [
                'allow_single_line_anonymous_class_with_empty_body' => false,
                'allow_single_line_closure' => false,
                'position_after_anonymous_constructs' => 'same',
                'position_after_control_structures' => 'same',
                'position_after_functions_and_oop_constructs' => 'next',
            ],
            'cast_spaces' => [
                'space' => 'single',
            ],
            'class_attributes_separation' => [
                'elements' => [
                    'method' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => [
                'multi_line_extends_each_single_line' => false,
                'single_item_single_line' => true,
                'single_line' => true,
            ],
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'combine_nested_dirname' => false,
            'comment_to_phpdoc' => false,
            'compact_nullable_typehint' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'constant_case' => true,
            'date_time_immutable' => false,
            'declare_equal_normalize' => [
                'space' => 'none',
            ],
            'declare_parentheses' => true,
            'declare_strict_types' => false,
            'dir_constant' => true,
            'echo_tag_syntax' => [
                'format' => 'short',
            ],
            'elseif' => true,
            'empty_loop_condition' => true,
            'encoding' => true,
            'ereg_to_preg' => true,
            'error_suppression' => false,
            'escape_implicit_backslashes' => [
                'double_quoted' => true,
                'heredoc_syntax' => true,
                'single_quoted' => false,
            ],
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'final_internal_class' => false,
            'fopen_flag_order' => true,
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => true,
            'function_declaration' => [
                'closure_function_spacing' => 'one',
            ],
            'function_to_constant' => true,
            'function_typehint_space' => true,
            'general_phpdoc_annotation_remove' => [],
            /*'header_comment' => [
                'comment_type' => 'comment',
                'header' => '',
                'location' => 'after_declare_strict',
                'separate' => 'none',
             ],*/
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'implode_call' => false,
            'include' => true,
            'increment_style' => false,
            'indentation_type' => true,
            'is_null' => false,
            'line_ending' => true,
            'linebreak_after_opening_tag' => false,
            'list_syntax' => ['syntax' => 'short'],
            'logical_operators' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'mb_str_functions' => false,
            'method_argument_space' => [
                'keep_multiple_spaces_after_comma' => false,
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'method_chaining_indentation' => true,
            'modernize_strpos' => true,
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'no_multi_line',
            ],
            'native_constant_invocation' => true,
            'native_function_casing' => true,
            'native_function_invocation' => [
                'include' => ['@internal'],
                'scope' => 'namespaced',
                'strict' => true,
            ],
            'new_with_braces' => true,
            'no_alias_functions' => true,
            'no_alternative_syntax' => false,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_blank_lines_before_namespace' => true,
            'no_break_comment' => false,
            'no_closing_tag' => true,
            'no_empty_comment' => false,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_homoglyph_names' => false,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => false,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_space_around_double_colon' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => false,
            'no_trailing_comma_in_singleline' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => true,
            'no_unreachable_default_argument_value' => false,
            'no_unset_cast' => false,
            'no_unset_on_property' => false,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'non_printable_character' => true,
            'normalize_index_brace' => true,
            'not_operator_with_space' => true,
            'not_operator_with_successor_space' => false,
            'object_operator_without_whitespace' => true,
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'constant',
                    'property',
                    'construct',
                    'destruct',
                    'magic',
                    'method',
                    'method_static',
                ],
                'sort_algorithm' => 'none',
            ],
            'ordered_imports' => true,
            'php_unit_construct' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_align' => false,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_line_span' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => ['replacements' => ['type' => 'var', 'link' => 'see']],
            'phpdoc_no_empty_return' => false,
            'phpdoc_no_package' => false,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_to_comment' => false,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'alpha',
            ],
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => false,
            'pow_to_exponentiation' => false,
            'protected_to_private' => false,
            'psr_autoloading' => false,
            'random_api_migration' => false,
            'return_assignment' => true,
            'return_type_declaration' => [
                'space_before' => 'one',
            ],
            'self_accessor' => false,
            'semicolon_after_instruction' => false,
            'set_type_to_cast' => true,
            'short_scalar_cast' => true,
            'simplified_null_return' => false,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => false,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_style' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'static_lambda' => true,
            'strict_comparison' => true,
            'strict_param' => false,
            'string_line_ending' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => ['elements' => ['arrays']],
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => true,
            'void_return' => true,
            'whitespace_after_comma_in_array' => [
                'ensure_single_space' => true,
            ],
            'yoda_style' => false,
        ]);
    }

    /**
     * @param array<string,mixed> $rules
     *
     * @return static
     */
    public function replaceRules(array $rules) : static
    {
        $this->setRules(\array_replace_recursive($this->getRules(), $rules));
        return $this;
    }

    public function setHeaderComment(string $header) : static
    {
        $this->replaceRules([
            'header_comment' => [
                'comment_type' => 'comment',
                'header' => $header,
                'location' => 'after_declare_strict',
                'separate' => 'none',
            ],
        ]);
        return $this;
    }

    public function setDefaultHeaderComment(
        string $packageName,
        string $copyright = ''
    ) : static {
        $copyrightLines = "\n";
        if ($copyright) {
            $copyrightLines .= "\n" . '(c) ' . $copyright . "\n";
        }
        $header = <<<EOF
            This file is part of {$packageName}.{$copyrightLines}
            For the full copyright and license information, please view the LICENSE
            file that was distributed with this source code.
            EOF;
        $this->setHeaderComment($header);
        return $this;
    }
}
