<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php52\Rector\Property\VarToPublicPropertyRector;
use Rector\Php53\Rector\Ternary\TernaryToElvisRector;
use Rector\Php54\Rector\Array_\LongArrayToShortArrayRector;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector;
use Rector\Php70\Rector\FuncCall\RandomFunctionRector;
use Rector\Php70\Rector\MethodCall\ThisCallOnStaticMethodToStaticCallRector;
use Rector\Php70\Rector\Ternary\TernaryToNullCoalescingRector;
use Rector\Php71\Rector\BinaryOp\BinaryOpBetweenNumberAndStringRector;
use Rector\Php71\Rector\ClassConst\PublicConstantVisibilityRector;
use Rector\Php71\Rector\FuncCall\CountOnNullRector;
use Rector\Php71\Rector\FuncCall\RemoveExtraParametersRector;
use Rector\Php71\Rector\TryCatch\MultiExceptionCatchRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\Php73\Rector\FuncCall\SetCookieRector;
use Rector\Php73\Rector\FuncCall\StringifyStrNeedlesRector;
use Rector\Php74\Rector\Assign\NullCoalescingOperatorRector;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php74\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;
use Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector;
use Rector\Php74\Rector\Ternary\ParenthesizeNestedTernaryRector;
use Rector\Php80\Rector\Catch_\RemoveUnusedVariableInCatchRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php80\Rector\FuncCall\ClassOnObjectRector;
use Rector\Php80\Rector\FunctionLike\MixedTypeRector;
use Rector\Php80\Rector\FunctionLike\UnionTypesRector;
use Rector\Php80\Rector\Identical\StrEndsWithRector;
use Rector\Php80\Rector\Identical\StrStartsWithRector;
use Rector\Php80\Rector\NotIdentical\StrContainsRector;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->disableParallel();

    $rectorConfig->paths([
        __DIR__ . '/lib',
    ]);

    // define sets of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80
    ]);

    $rectorConfig->skip([
        ClassPropertyAssignToConstructorPromotionRector::class,
        RemoveUnusedVariableInCatchRector::class,
        MultiExceptionCatchRector::class,
        ChangeSwitchToMatchRector::class,
        LongArrayToShortArrayRector::class,
        ArraySpreadInsteadOfArrayMergeRector::class,
        AddDefaultValueForUndefinedVariableRector::class,
        CountOnNullRector::class,
        JsonThrowOnErrorRector::class,
        ClosureToArrowFunctionRector::class,
        StrContainsRector::class,
        StrStartsWithRector::class,
        StrEndsWithRector::class,
        PublicConstantVisibilityRector::class,
        TypedPropertyFromAssignsRector::class,
        RandomFunctionRector::class,
        UnionTypesRector::class,
        MixedTypeRector::class,
        TernaryToNullCoalescingRector::class,
        TernaryToElvisRector::class,
        NullCoalescingOperatorRector::class,
        ParenthesizeNestedTernaryRector::class,
        AddLiteralSeparatorToNumberRector::class,
        StringClassNameToClassConstantRector::class,
        ClassOnObjectRector::class,
        SetCookieRector::class,
        StringifyStrNeedlesRector::class,
        ThisCallOnStaticMethodToStaticCallRector::class,
        RemoveExtraParametersRector::class,
        BinaryOpBetweenNumberAndStringRector::class,
        VarToPublicPropertyRector::class,
    ]);
};
