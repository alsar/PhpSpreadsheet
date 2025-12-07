# Function list by category

## CATEGORY_CUBE

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
CUBEKPIMEMBER            | **Not yet Implemented**
CUBEMEMBER               | **Not yet Implemented**
CUBEMEMBERPROPERTY       | **Not yet Implemented**
CUBERANKEDMEMBER         | **Not yet Implemented**
CUBESET                  | **Not yet Implemented**
CUBESETCOUNT             | **Not yet Implemented**
CUBEVALUE                | **Not yet Implemented**

## CATEGORY_DATABASE

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
DAVERAGE                 | \PhpSpreadsheet\Calculation\Database\DAverage::evaluate
DCOUNT                   | \PhpSpreadsheet\Calculation\Database\DCount::evaluate
DCOUNTA                  | \PhpSpreadsheet\Calculation\Database\DCountA::evaluate
DGET                     | \PhpSpreadsheet\Calculation\Database\DGet::evaluate
DMAX                     | \PhpSpreadsheet\Calculation\Database\DMax::evaluate
DMIN                     | \PhpSpreadsheet\Calculation\Database\DMin::evaluate
DPRODUCT                 | \PhpSpreadsheet\Calculation\Database\DProduct::evaluate
DSTDEV                   | \PhpSpreadsheet\Calculation\Database\DStDev::evaluate
DSTDEVP                  | \PhpSpreadsheet\Calculation\Database\DStDevP::evaluate
DSUM                     | \PhpSpreadsheet\Calculation\Database\DSum::evaluate
DVAR                     | \PhpSpreadsheet\Calculation\Database\DVar::evaluate
DVARP                    | \PhpSpreadsheet\Calculation\Database\DVarP::evaluate

## CATEGORY_DATE_AND_TIME

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
DATE                     | \PhpSpreadsheet\Calculation\DateTimeExcel\Date::fromYMD
DATEDIF                  | \PhpSpreadsheet\Calculation\DateTimeExcel\Difference::interval
DATESTRING               | **Not yet Implemented**
DATEVALUE                | \PhpSpreadsheet\Calculation\DateTimeExcel\DateValue::fromString
DAY                      | \PhpSpreadsheet\Calculation\DateTimeExcel\DateParts::day
DAYS                     | \PhpSpreadsheet\Calculation\DateTimeExcel\Days::between
DAYS360                  | \PhpSpreadsheet\Calculation\DateTimeExcel\Days360::between
EDATE                    | \PhpSpreadsheet\Calculation\DateTimeExcel\Month::adjust
EOMONTH                  | \PhpSpreadsheet\Calculation\DateTimeExcel\Month::lastDay
HOUR                     | \PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts::hour
ISOWEEKNUM               | \PhpSpreadsheet\Calculation\DateTimeExcel\Week::isoWeekNumber
MINUTE                   | \PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts::minute
MONTH                    | \PhpSpreadsheet\Calculation\DateTimeExcel\DateParts::month
NETWORKDAYS              | \PhpSpreadsheet\Calculation\DateTimeExcel\NetworkDays::count
NETWORKDAYS.INTL         | **Not yet Implemented**
NOW                      | \PhpSpreadsheet\Calculation\DateTimeExcel\Current::now
SECOND                   | \PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts::second
THAIDAYOFWEEK            | **Not yet Implemented**
THAIMONTHOFYEAR          | **Not yet Implemented**
THAIYEAR                 | **Not yet Implemented**
TIME                     | \PhpSpreadsheet\Calculation\DateTimeExcel\Time::fromHMS
TIMEVALUE                | \PhpSpreadsheet\Calculation\DateTimeExcel\TimeValue::fromString
TODAY                    | \PhpSpreadsheet\Calculation\DateTimeExcel\Current::today
WEEKDAY                  | \PhpSpreadsheet\Calculation\DateTimeExcel\Week::day
WEEKNUM                  | \PhpSpreadsheet\Calculation\DateTimeExcel\Week::number
WORKDAY                  | \PhpSpreadsheet\Calculation\DateTimeExcel\WorkDay::date
WORKDAY.INTL             | **Not yet Implemented**
YEAR                     | \PhpSpreadsheet\Calculation\DateTimeExcel\DateParts::year
YEARFRAC                 | \PhpSpreadsheet\Calculation\DateTimeExcel\YearFrac::fraction

## CATEGORY_ENGINEERING

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
BESSELI                  | \PhpSpreadsheet\Calculation\Engineering\BesselI::BESSELI
BESSELJ                  | \PhpSpreadsheet\Calculation\Engineering\BesselJ::BESSELJ
BESSELK                  | \PhpSpreadsheet\Calculation\Engineering\BesselK::BESSELK
BESSELY                  | \PhpSpreadsheet\Calculation\Engineering\BesselY::BESSELY
BIN2DEC                  | \PhpSpreadsheet\Calculation\Engineering\ConvertBinary::toDecimal
BIN2HEX                  | \PhpSpreadsheet\Calculation\Engineering\ConvertBinary::toHex
BIN2OCT                  | \PhpSpreadsheet\Calculation\Engineering\ConvertBinary::toOctal
BITAND                   | \PhpSpreadsheet\Calculation\Engineering\BitWise::BITAND
BITLSHIFT                | \PhpSpreadsheet\Calculation\Engineering\BitWise::BITLSHIFT
BITOR                    | \PhpSpreadsheet\Calculation\Engineering\BitWise::BITOR
BITRSHIFT                | \PhpSpreadsheet\Calculation\Engineering\BitWise::BITRSHIFT
BITXOR                   | \PhpSpreadsheet\Calculation\Engineering\BitWise::BITXOR
COMPLEX                  | \PhpSpreadsheet\Calculation\Engineering\Complex::COMPLEX
CONVERT                  | \PhpSpreadsheet\Calculation\Engineering\ConvertUOM::CONVERT
DEC2BIN                  | \PhpSpreadsheet\Calculation\Engineering\ConvertDecimal::toBinary
DEC2HEX                  | \PhpSpreadsheet\Calculation\Engineering\ConvertDecimal::toHex
DEC2OCT                  | \PhpSpreadsheet\Calculation\Engineering\ConvertDecimal::toOctal
DELTA                    | \PhpSpreadsheet\Calculation\Engineering\Compare::DELTA
ERF                      | \PhpSpreadsheet\Calculation\Engineering\Erf::ERF
ERF.PRECISE              | \PhpSpreadsheet\Calculation\Engineering\Erf::ERFPRECISE
ERFC                     | \PhpSpreadsheet\Calculation\Engineering\ErfC::ERFC
ERFC.PRECISE             | \PhpSpreadsheet\Calculation\Engineering\ErfC::ERFC
GESTEP                   | \PhpSpreadsheet\Calculation\Engineering\Compare::GESTEP
HEX2BIN                  | \PhpSpreadsheet\Calculation\Engineering\ConvertHex::toBinary
HEX2DEC                  | \PhpSpreadsheet\Calculation\Engineering\ConvertHex::toDecimal
HEX2OCT                  | \PhpSpreadsheet\Calculation\Engineering\ConvertHex::toOctal
IMABS                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMABS
IMAGINARY                | \PhpSpreadsheet\Calculation\Engineering\Complex::IMAGINARY
IMARGUMENT               | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMARGUMENT
IMCONJUGATE              | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCONJUGATE
IMCOS                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCOS
IMCOSH                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCOSH
IMCOT                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCOT
IMCSC                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCSC
IMCSCH                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMCSCH
IMDIV                    | \PhpSpreadsheet\Calculation\Engineering\ComplexOperations::IMDIV
IMEXP                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMEXP
IMLN                     | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMLN
IMLOG10                  | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMLOG10
IMLOG2                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMLOG2
IMPOWER                  | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMPOWER
IMPRODUCT                | \PhpSpreadsheet\Calculation\Engineering\ComplexOperations::IMPRODUCT
IMREAL                   | \PhpSpreadsheet\Calculation\Engineering\Complex::IMREAL
IMSEC                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMSEC
IMSECH                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMSECH
IMSIN                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMSIN
IMSINH                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMSINH
IMSQRT                   | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMSQRT
IMSUB                    | \PhpSpreadsheet\Calculation\Engineering\ComplexOperations::IMSUB
IMSUM                    | \PhpSpreadsheet\Calculation\Engineering\ComplexOperations::IMSUM
IMTAN                    | \PhpSpreadsheet\Calculation\Engineering\ComplexFunctions::IMTAN
OCT2BIN                  | \PhpSpreadsheet\Calculation\Engineering\ConvertOctal::toBinary
OCT2DEC                  | \PhpSpreadsheet\Calculation\Engineering\ConvertOctal::toDecimal
OCT2HEX                  | \PhpSpreadsheet\Calculation\Engineering\ConvertOctal::toHex

## CATEGORY_FINANCIAL

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
ACCRINT                  | \PhpSpreadsheet\Calculation\Financial\Securities\AccruedInterest::periodic
ACCRINTM                 | \PhpSpreadsheet\Calculation\Financial\Securities\AccruedInterest::atMaturity
AMORDEGRC                | \PhpSpreadsheet\Calculation\Financial\Amortization::AMORDEGRC
AMORLINC                 | \PhpSpreadsheet\Calculation\Financial\Amortization::AMORLINC
COUPDAYBS                | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPDAYBS
COUPDAYS                 | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPDAYS
COUPDAYSNC               | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPDAYSNC
COUPNCD                  | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPNCD
COUPNUM                  | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPNUM
COUPPCD                  | \PhpSpreadsheet\Calculation\Financial\Coupons::COUPPCD
CUMIPMT                  | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative::interest
CUMPRINC                 | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative::principal
DB                       | \PhpSpreadsheet\Calculation\Financial\Depreciation::DB
DDB                      | \PhpSpreadsheet\Calculation\Financial\Depreciation::DDB
DISC                     | \PhpSpreadsheet\Calculation\Financial\Securities\Rates::discount
DOLLARDE                 | \PhpSpreadsheet\Calculation\Financial\Dollar::decimal
DOLLARFR                 | \PhpSpreadsheet\Calculation\Financial\Dollar::fractional
DURATION                 | **Not yet Implemented**
EFFECT                   | \PhpSpreadsheet\Calculation\Financial\InterestRate::effective
FV                       | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic::futureValue
FVSCHEDULE               | \PhpSpreadsheet\Calculation\Financial\CashFlow\Single::futureValue
INTRATE                  | \PhpSpreadsheet\Calculation\Financial\Securities\Rates::interest
IPMT                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Interest::payment
IRR                      | \PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic::rate
ISPMT                    | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Interest::schedulePayment
MDURATION                | **Not yet Implemented**
MIRR                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic::modifiedRate
NOMINAL                  | \PhpSpreadsheet\Calculation\Financial\InterestRate::nominal
NPER                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic::periods
NPV                      | \PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic::presentValue
ODDFPRICE                | **Not yet Implemented**
ODDFYIELD                | **Not yet Implemented**
ODDLPRICE                | **Not yet Implemented**
ODDLYIELD                | **Not yet Implemented**
PDURATION                | \PhpSpreadsheet\Calculation\Financial\CashFlow\Single::periods
PMT                      | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments::annuity
PPMT                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments::interestPayment
PRICE                    | \PhpSpreadsheet\Calculation\Financial\Securities\Price::price
PRICEDISC                | \PhpSpreadsheet\Calculation\Financial\Securities\Price::priceDiscounted
PRICEMAT                 | \PhpSpreadsheet\Calculation\Financial\Securities\Price::priceAtMaturity
PV                       | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic::presentValue
RATE                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Interest::rate
RECEIVED                 | \PhpSpreadsheet\Calculation\Financial\Securities\Price::received
RRI                      | \PhpSpreadsheet\Calculation\Financial\CashFlow\Single::interestRate
SLN                      | \PhpSpreadsheet\Calculation\Financial\Depreciation::SLN
SYD                      | \PhpSpreadsheet\Calculation\Financial\Depreciation::SYD
TBILLEQ                  | \PhpSpreadsheet\Calculation\Financial\TreasuryBill::bondEquivalentYield
TBILLPRICE               | \PhpSpreadsheet\Calculation\Financial\TreasuryBill::price
TBILLYIELD               | \PhpSpreadsheet\Calculation\Financial\TreasuryBill::yield
USDOLLAR                 | \PhpSpreadsheet\Calculation\Financial\Dollar::format
VDB                      | **Not yet Implemented**
XIRR                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic::rate
XNPV                     | \PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic::presentValue
YIELD                    | **Not yet Implemented**
YIELDDISC                | \PhpSpreadsheet\Calculation\Financial\Securities\Yields::yieldDiscounted
YIELDMAT                 | \PhpSpreadsheet\Calculation\Financial\Securities\Yields::yieldAtMaturity

## CATEGORY_INFORMATION

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
CELL                     | **Not yet Implemented**
ERROR.TYPE               | \PhpSpreadsheet\Calculation\Information\ExcelError::type
INFO                     | **Not yet Implemented**
ISBLANK                  | \PhpSpreadsheet\Calculation\Information\Value::isBlank
ISERR                    | \PhpSpreadsheet\Calculation\Information\ErrorValue::isErr
ISERROR                  | \PhpSpreadsheet\Calculation\Information\ErrorValue::isError
ISEVEN                   | \PhpSpreadsheet\Calculation\Information\Value::isEven
ISFORMULA                | \PhpSpreadsheet\Calculation\Information\Value::isFormula
ISLOGICAL                | \PhpSpreadsheet\Calculation\Information\Value::isLogical
ISNA                     | \PhpSpreadsheet\Calculation\Information\ErrorValue::isNa
ISNONTEXT                | \PhpSpreadsheet\Calculation\Information\Value::isNonText
ISNUMBER                 | \PhpSpreadsheet\Calculation\Information\Value::isNumber
ISODD                    | \PhpSpreadsheet\Calculation\Information\Value::isOdd
ISREF                    | \PhpSpreadsheet\Calculation\Information\Value::isRef
ISTEXT                   | \PhpSpreadsheet\Calculation\Information\Value::isText
N                        | \PhpSpreadsheet\Calculation\Information\Value::asNumber
NA                       | \PhpSpreadsheet\Calculation\Information\ExcelError::NA
SHEET                    | **Not yet Implemented**
SHEETS                   | **Not yet Implemented**
TYPE                     | \PhpSpreadsheet\Calculation\Information\Value::type

## CATEGORY_LOGICAL

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
AND                      | \PhpSpreadsheet\Calculation\Logical\Operations::logicalAnd
FALSE                    | \PhpSpreadsheet\Calculation\Logical\Boolean::FALSE
IF                       | \PhpSpreadsheet\Calculation\Logical\Conditional::statementIf
IFERROR                  | \PhpSpreadsheet\Calculation\Logical\Conditional::IFERROR
IFNA                     | \PhpSpreadsheet\Calculation\Logical\Conditional::IFNA
IFS                      | \PhpSpreadsheet\Calculation\Logical\Conditional::IFS
NOT                      | \PhpSpreadsheet\Calculation\Logical\Operations::NOT
OR                       | \PhpSpreadsheet\Calculation\Logical\Operations::logicalOr
SWITCH                   | \PhpSpreadsheet\Calculation\Logical\Conditional::statementSwitch
TRUE                     | \PhpSpreadsheet\Calculation\Logical\Boolean::TRUE
XOR                      | \PhpSpreadsheet\Calculation\Logical\Operations::logicalXor

## CATEGORY_LOOKUP_AND_REFERENCE

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
ADDRESS                  | \PhpSpreadsheet\Calculation\LookupRef\Address::cell
AREAS                    | **Not yet Implemented**
CHOOSE                   | \PhpSpreadsheet\Calculation\LookupRef\Selection::CHOOSE
COLUMN                   | \PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation::COLUMN
COLUMNS                  | \PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation::COLUMNS
FILTER                   | \PhpSpreadsheet\Calculation\LookupRef\Filter::filter
FORMULATEXT              | \PhpSpreadsheet\Calculation\LookupRef\Formula::text
GETPIVOTDATA             | **Not yet Implemented**
HLOOKUP                  | \PhpSpreadsheet\Calculation\LookupRef\HLookup::lookup
HYPERLINK                | \PhpSpreadsheet\Calculation\LookupRef\Hyperlink::set
INDEX                    | \PhpSpreadsheet\Calculation\LookupRef\Matrix::index
INDIRECT                 | \PhpSpreadsheet\Calculation\LookupRef\Indirect::INDIRECT
LOOKUP                   | \PhpSpreadsheet\Calculation\LookupRef\Lookup::lookup
MATCH                    | \PhpSpreadsheet\Calculation\LookupRef\ExcelMatch::MATCH
OFFSET                   | \PhpSpreadsheet\Calculation\LookupRef\Offset::OFFSET
ROW                      | \PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation::ROW
ROWS                     | \PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation::ROWS
RTD                      | **Not yet Implemented**
SORT                     | \PhpSpreadsheet\Calculation\LookupRef\Sort::sort
SORTBY                   | \PhpSpreadsheet\Calculation\LookupRef\Sort::sortBy
TRANSPOSE                | \PhpSpreadsheet\Calculation\LookupRef\Matrix::transpose
UNIQUE                   | \PhpSpreadsheet\Calculation\LookupRef\Unique::unique
VLOOKUP                  | \PhpSpreadsheet\Calculation\LookupRef\VLookup::lookup
XLOOKUP                  | **Not yet Implemented**
XMATCH                   | **Not yet Implemented**

## CATEGORY_MATH_AND_TRIG

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
ABS                      | \PhpSpreadsheet\Calculation\MathTrig\Absolute::evaluate
ACOS                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosine::acos
ACOSH                    | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosine::acosh
ACOT                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cotangent::acot
ACOTH                    | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cotangent::acoth
AGGREGATE                | **Not yet Implemented**
ARABIC                   | \PhpSpreadsheet\Calculation\MathTrig\Arabic::evaluate
ASIN                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Sine::asin
ASINH                    | \PhpSpreadsheet\Calculation\MathTrig\Trig\Sine::asinh
ATAN                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent::atan
ATAN2                    | \PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent::atan2
ATANH                    | \PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent::atanh
BASE                     | \PhpSpreadsheet\Calculation\MathTrig\Base::evaluate
CEILING                  | \PhpSpreadsheet\Calculation\MathTrig\Ceiling::ceiling
CEILING.MATH             | \PhpSpreadsheet\Calculation\MathTrig\Ceiling::math
CEILING.PRECISE          | \PhpSpreadsheet\Calculation\MathTrig\Ceiling::precise
CHOOSECOLS               | **Not yet Implemented**
CHOOSEROWS               | **Not yet Implemented**
COMBIN                   | \PhpSpreadsheet\Calculation\MathTrig\Combinations::withoutRepetition
COMBINA                  | \PhpSpreadsheet\Calculation\MathTrig\Combinations::withRepetition
COS                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosine::cos
COSH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosine::cosh
COT                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cotangent::cot
COTH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cotangent::coth
CSC                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosecant::csc
CSCH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Cosecant::csch
DECIMAL                  | **Not yet Implemented**
DEGREES                  | \PhpSpreadsheet\Calculation\MathTrig\Angle::toDegrees
DROP                     | **Not yet Implemented**
ECMA.CEILING             | **Not yet Implemented**
EVEN                     | \PhpSpreadsheet\Calculation\MathTrig\Round::even
EXP                      | \PhpSpreadsheet\Calculation\MathTrig\Exp::evaluate
EXPAND                   | **Not yet Implemented**
FACT                     | \PhpSpreadsheet\Calculation\MathTrig\Factorial::fact
FACTDOUBLE               | \PhpSpreadsheet\Calculation\MathTrig\Factorial::factDouble
FLOOR                    | \PhpSpreadsheet\Calculation\MathTrig\Floor::floor
FLOOR.MATH               | \PhpSpreadsheet\Calculation\MathTrig\Floor::math
FLOOR.PRECISE            | \PhpSpreadsheet\Calculation\MathTrig\Floor::precise
GCD                      | \PhpSpreadsheet\Calculation\MathTrig\Gcd::evaluate
HSTACK                   | **Not yet Implemented**
INT                      | \PhpSpreadsheet\Calculation\MathTrig\IntClass::evaluate
ISO.CEILING              | **Not yet Implemented**
LCM                      | \PhpSpreadsheet\Calculation\MathTrig\Lcm::evaluate
LN                       | \PhpSpreadsheet\Calculation\MathTrig\Logarithms::natural
LOG                      | \PhpSpreadsheet\Calculation\MathTrig\Logarithms::withBase
LOG10                    | \PhpSpreadsheet\Calculation\MathTrig\Logarithms::base10
MDETERM                  | \PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions::determinant
MINVERSE                 | \PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions::inverse
MMULT                    | \PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions::multiply
MOD                      | \PhpSpreadsheet\Calculation\MathTrig\Operations::mod
MROUND                   | \PhpSpreadsheet\Calculation\MathTrig\Round::multiple
MULTINOMIAL              | \PhpSpreadsheet\Calculation\MathTrig\Factorial::multinomial
MUNIT                    | \PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions::identity
ODD                      | \PhpSpreadsheet\Calculation\MathTrig\Round::odd
PI                       | pi
POWER                    | \PhpSpreadsheet\Calculation\MathTrig\Operations::power
PRODUCT                  | \PhpSpreadsheet\Calculation\MathTrig\Operations::product
QUOTIENT                 | \PhpSpreadsheet\Calculation\MathTrig\Operations::quotient
RADIANS                  | \PhpSpreadsheet\Calculation\MathTrig\Angle::toRadians
RAND                     | \PhpSpreadsheet\Calculation\MathTrig\Random::rand
RANDARRAY                | \PhpSpreadsheet\Calculation\MathTrig\Random::randArray
RANDBETWEEN              | \PhpSpreadsheet\Calculation\MathTrig\Random::randBetween
ROMAN                    | \PhpSpreadsheet\Calculation\MathTrig\Roman::evaluate
ROUND                    | \PhpSpreadsheet\Calculation\MathTrig\Round::round
ROUNDBAHTDOWN            | **Not yet Implemented**
ROUNDBAHTUP              | **Not yet Implemented**
ROUNDDOWN                | \PhpSpreadsheet\Calculation\MathTrig\Round::down
ROUNDUP                  | \PhpSpreadsheet\Calculation\MathTrig\Round::up
SEC                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Secant::sec
SECH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Secant::sech
SEQUENCE                 | \PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions::sequence
SERIESSUM                | \PhpSpreadsheet\Calculation\MathTrig\SeriesSum::evaluate
SIGN                     | \PhpSpreadsheet\Calculation\MathTrig\Sign::evaluate
SIN                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Sine::sin
SINH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Sine::sinh
SQRT                     | \PhpSpreadsheet\Calculation\MathTrig\Sqrt::sqrt
SQRTPI                   | \PhpSpreadsheet\Calculation\MathTrig\Sqrt::pi
SUBTOTAL                 | \PhpSpreadsheet\Calculation\MathTrig\Subtotal::evaluate
SUM                      | \PhpSpreadsheet\Calculation\MathTrig\Sum::sumErroringStrings
SUMIF                    | \PhpSpreadsheet\Calculation\Statistical\Conditional::SUMIF
SUMIFS                   | \PhpSpreadsheet\Calculation\Statistical\Conditional::SUMIFS
SUMPRODUCT               | \PhpSpreadsheet\Calculation\MathTrig\Sum::product
SUMSQ                    | \PhpSpreadsheet\Calculation\MathTrig\SumSquares::sumSquare
SUMX2MY2                 | \PhpSpreadsheet\Calculation\MathTrig\SumSquares::sumXSquaredMinusYSquared
SUMX2PY2                 | \PhpSpreadsheet\Calculation\MathTrig\SumSquares::sumXSquaredPlusYSquared
SUMXMY2                  | \PhpSpreadsheet\Calculation\MathTrig\SumSquares::sumXMinusYSquared
TAKE                     | **Not yet Implemented**
TAN                      | \PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent::tan
TANH                     | \PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent::tanh
TOCOL                    | **Not yet Implemented**
TOROW                    | **Not yet Implemented**
TRUNC                    | \PhpSpreadsheet\Calculation\MathTrig\Trunc::evaluate
VSTACK                   | **Not yet Implemented**
WRAPCOLS                 | **Not yet Implemented**
WRAPROWS                 | **Not yet Implemented**

## CATEGORY_STATISTICAL

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
AVEDEV                   | \PhpSpreadsheet\Calculation\Statistical\Averages::averageDeviations
AVERAGE                  | \PhpSpreadsheet\Calculation\Statistical\Averages::average
AVERAGEA                 | \PhpSpreadsheet\Calculation\Statistical\Averages::averageA
AVERAGEIF                | \PhpSpreadsheet\Calculation\Statistical\Conditional::AVERAGEIF
AVERAGEIFS               | \PhpSpreadsheet\Calculation\Statistical\Conditional::AVERAGEIFS
BETA.DIST                | **Not yet Implemented**
BETA.INV                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\Beta::inverse
BETADIST                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\Beta::distribution
BETAINV                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\Beta::inverse
BINOM.DIST               | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::distribution
BINOM.DIST.RANGE         | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::range
BINOM.INV                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::inverse
BINOMDIST                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::distribution
CHIDIST                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::distributionRightTail
CHIINV                   | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::inverseRightTail
CHISQ.DIST               | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::distributionLeftTail
CHISQ.DIST.RT            | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::distributionRightTail
CHISQ.INV                | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::inverseLeftTail
CHISQ.INV.RT             | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::inverseRightTail
CHISQ.TEST               | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::test
CHITEST                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared::test
CONFIDENCE               | \PhpSpreadsheet\Calculation\Statistical\Confidence::CONFIDENCE
CONFIDENCE.NORM          | \PhpSpreadsheet\Calculation\Statistical\Confidence::CONFIDENCE
CONFIDENCE.T             | **Not yet Implemented**
CORREL                   | \PhpSpreadsheet\Calculation\Statistical\Trends::CORREL
COUNT                    | \PhpSpreadsheet\Calculation\Statistical\Counts::COUNT
COUNTA                   | \PhpSpreadsheet\Calculation\Statistical\Counts::COUNTA
COUNTBLANK               | \PhpSpreadsheet\Calculation\Statistical\Counts::COUNTBLANK
COUNTIF                  | \PhpSpreadsheet\Calculation\Statistical\Conditional::COUNTIF
COUNTIFS                 | \PhpSpreadsheet\Calculation\Statistical\Conditional::COUNTIFS
COVAR                    | \PhpSpreadsheet\Calculation\Statistical\Trends::COVAR
COVARIANCE.P             | \PhpSpreadsheet\Calculation\Statistical\Trends::COVAR
COVARIANCE.S             | **Not yet Implemented**
CRITBINOM                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::inverse
DEVSQ                    | \PhpSpreadsheet\Calculation\Statistical\Deviations::sumSquares
EXPON.DIST               | \PhpSpreadsheet\Calculation\Statistical\Distributions\Exponential::distribution
EXPONDIST                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Exponential::distribution
F.DIST                   | \PhpSpreadsheet\Calculation\Statistical\Distributions\F::distribution
F.DIST.RT                | **Not yet Implemented**
F.INV                    | **Not yet Implemented**
F.INV.RT                 | **Not yet Implemented**
F.TEST                   | **Not yet Implemented**
FDIST                    | **Not yet Implemented**
FINV                     | **Not yet Implemented**
FISHER                   | \PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher::distribution
FISHERINV                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher::inverse
FORECAST                 | \PhpSpreadsheet\Calculation\Statistical\Trends::FORECAST
FORECAST.ETS             | **Not yet Implemented**
FORECAST.ETS.CONFINT     | **Not yet Implemented**
FORECAST.ETS.SEASONALITY | **Not yet Implemented**
FORECAST.ETS.STAT        | **Not yet Implemented**
FORECAST.LINEAR          | \PhpSpreadsheet\Calculation\Statistical\Trends::FORECAST
FREQUENCY                | **Not yet Implemented**
FTEST                    | **Not yet Implemented**
GAMMA                    | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::gamma
GAMMA.DIST               | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::distribution
GAMMA.INV                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::inverse
GAMMADIST                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::distribution
GAMMAINV                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::inverse
GAMMALN                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::ln
GAMMALN.PRECISE          | \PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma::ln
GAUSS                    | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::gauss
GEOMEAN                  | \PhpSpreadsheet\Calculation\Statistical\Averages\Mean::geometric
GROWTH                   | \PhpSpreadsheet\Calculation\Statistical\Trends::GROWTH
HARMEAN                  | \PhpSpreadsheet\Calculation\Statistical\Averages\Mean::harmonic
HYPGEOM.DIST             | **Not yet Implemented**
HYPGEOMDIST              | \PhpSpreadsheet\Calculation\Statistical\Distributions\HyperGeometric::distribution
INTERCEPT                | \PhpSpreadsheet\Calculation\Statistical\Trends::INTERCEPT
KURT                     | \PhpSpreadsheet\Calculation\Statistical\Deviations::kurtosis
LARGE                    | \PhpSpreadsheet\Calculation\Statistical\Size::large
LINEST                   | \PhpSpreadsheet\Calculation\Statistical\Trends::LINEST
LOGEST                   | \PhpSpreadsheet\Calculation\Statistical\Trends::LOGEST
LOGINV                   | \PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal::inverse
LOGNORM.DIST             | \PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal::distribution
LOGNORM.INV              | \PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal::inverse
LOGNORMDIST              | \PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal::cumulative
MAX                      | \PhpSpreadsheet\Calculation\Statistical\Maximum::max
MAXA                     | \PhpSpreadsheet\Calculation\Statistical\Maximum::maxA
MAXIFS                   | \PhpSpreadsheet\Calculation\Statistical\Conditional::MAXIFS
MEDIAN                   | \PhpSpreadsheet\Calculation\Statistical\Averages::median
MEDIANIF                 | **Not yet Implemented**
MIN                      | \PhpSpreadsheet\Calculation\Statistical\Minimum::min
MINA                     | \PhpSpreadsheet\Calculation\Statistical\Minimum::minA
MINIFS                   | \PhpSpreadsheet\Calculation\Statistical\Conditional::MINIFS
MODE                     | \PhpSpreadsheet\Calculation\Statistical\Averages::mode
MODE.MULT                | **Not yet Implemented**
MODE.SNGL                | \PhpSpreadsheet\Calculation\Statistical\Averages::mode
NEGBINOM.DIST            | **Not yet Implemented**
NEGBINOMDIST             | \PhpSpreadsheet\Calculation\Statistical\Distributions\Binomial::negative
NORM.DIST                | \PhpSpreadsheet\Calculation\Statistical\Distributions\Normal::distribution
NORM.INV                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\Normal::inverse
NORM.S.DIST              | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::distribution
NORM.S.INV               | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::inverse
NORMDIST                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\Normal::distribution
NORMINV                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\Normal::inverse
NORMSDIST                | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::cumulative
NORMSINV                 | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::inverse
PEARSON                  | \PhpSpreadsheet\Calculation\Statistical\Trends::CORREL
PERCENTILE               | \PhpSpreadsheet\Calculation\Statistical\Percentiles::PERCENTILE
PERCENTILE.EXC           | **Not yet Implemented**
PERCENTILE.INC           | \PhpSpreadsheet\Calculation\Statistical\Percentiles::PERCENTILE
PERCENTRANK              | \PhpSpreadsheet\Calculation\Statistical\Percentiles::PERCENTRANK
PERCENTRANK.EXC          | **Not yet Implemented**
PERCENTRANK.INC          | \PhpSpreadsheet\Calculation\Statistical\Percentiles::PERCENTRANK
PERMUT                   | \PhpSpreadsheet\Calculation\Statistical\Permutations::PERMUT
PERMUTATIONA             | \PhpSpreadsheet\Calculation\Statistical\Permutations::PERMUTATIONA
PHI                      | **Not yet Implemented**
POISSON                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\Poisson::distribution
POISSON.DIST             | \PhpSpreadsheet\Calculation\Statistical\Distributions\Poisson::distribution
PROB                     | **Not yet Implemented**
QUARTILE                 | \PhpSpreadsheet\Calculation\Statistical\Percentiles::QUARTILE
QUARTILE.EXC             | **Not yet Implemented**
QUARTILE.INC             | \PhpSpreadsheet\Calculation\Statistical\Percentiles::QUARTILE
RANK                     | \PhpSpreadsheet\Calculation\Statistical\Percentiles::RANK
RANK.AVG                 | **Not yet Implemented**
RANK.EQ                  | \PhpSpreadsheet\Calculation\Statistical\Percentiles::RANK
RSQ                      | \PhpSpreadsheet\Calculation\Statistical\Trends::RSQ
SKEW                     | \PhpSpreadsheet\Calculation\Statistical\Deviations::skew
SKEW.P                   | **Not yet Implemented**
SLOPE                    | \PhpSpreadsheet\Calculation\Statistical\Trends::SLOPE
SMALL                    | \PhpSpreadsheet\Calculation\Statistical\Size::small
STANDARDIZE              | \PhpSpreadsheet\Calculation\Statistical\Standardize::execute
STDEV                    | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEV
STDEV.P                  | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEVP
STDEV.S                  | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEV
STDEVA                   | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEVA
STDEVP                   | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEVP
STDEVPA                  | \PhpSpreadsheet\Calculation\Statistical\StandardDeviations::STDEVPA
STEYX                    | \PhpSpreadsheet\Calculation\Statistical\Trends::STEYX
T.DIST                   | **Not yet Implemented**
T.DIST.2T                | **Not yet Implemented**
T.DIST.RT                | **Not yet Implemented**
T.INV                    | \PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT::inverse
T.INV.2T                 | **Not yet Implemented**
T.TEST                   | **Not yet Implemented**
TDIST                    | \PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT::distribution
TINV                     | \PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT::inverse
TREND                    | \PhpSpreadsheet\Calculation\Statistical\Trends::TREND
TRIMMEAN                 | \PhpSpreadsheet\Calculation\Statistical\Averages\Mean::trim
TTEST                    | **Not yet Implemented**
VAR                      | \PhpSpreadsheet\Calculation\Statistical\Variances::VAR
VAR.P                    | \PhpSpreadsheet\Calculation\Statistical\Variances::VARP
VAR.S                    | \PhpSpreadsheet\Calculation\Statistical\Variances::VAR
VARA                     | \PhpSpreadsheet\Calculation\Statistical\Variances::VARA
VARP                     | \PhpSpreadsheet\Calculation\Statistical\Variances::VARP
VARPA                    | \PhpSpreadsheet\Calculation\Statistical\Variances::VARPA
WEIBULL                  | \PhpSpreadsheet\Calculation\Statistical\Distributions\Weibull::distribution
WEIBULL.DIST             | \PhpSpreadsheet\Calculation\Statistical\Distributions\Weibull::distribution
Z.TEST                   | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::zTest
ZTEST                    | \PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal::zTest

## CATEGORY_TEXT_AND_DATA

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
ARRAYTOTEXT              | **Not yet Implemented**
ASC                      | **Not yet Implemented**
BAHTTEXT                 | **Not yet Implemented**
CHAR                     | \PhpSpreadsheet\Calculation\TextData\CharacterConvert::character
CLEAN                    | \PhpSpreadsheet\Calculation\TextData\Trim::nonPrintable
CODE                     | \PhpSpreadsheet\Calculation\TextData\CharacterConvert::code
CONCAT                   | \PhpSpreadsheet\Calculation\TextData\Concatenate::CONCATENATE
CONCATENATE              | \PhpSpreadsheet\Calculation\TextData\Concatenate::CONCATENATE
DBCS                     | **Not yet Implemented**
DOLLAR                   | \PhpSpreadsheet\Calculation\TextData\Format::DOLLAR
EXACT                    | \PhpSpreadsheet\Calculation\TextData\Text::exact
FIND                     | \PhpSpreadsheet\Calculation\TextData\Search::sensitive
FINDB                    | \PhpSpreadsheet\Calculation\TextData\Search::sensitive
FIXED                    | \PhpSpreadsheet\Calculation\TextData\Format::FIXEDFORMAT
ISTHAIDIGIT              | **Not yet Implemented**
JIS                      | **Not yet Implemented**
LEFT                     | \PhpSpreadsheet\Calculation\TextData\Extract::left
LEFTB                    | \PhpSpreadsheet\Calculation\TextData\Extract::left
LEN                      | \PhpSpreadsheet\Calculation\TextData\Text::length
LENB                     | \PhpSpreadsheet\Calculation\TextData\Text::length
LOWER                    | \PhpSpreadsheet\Calculation\TextData\CaseConvert::lower
MID                      | \PhpSpreadsheet\Calculation\TextData\Extract::mid
MIDB                     | \PhpSpreadsheet\Calculation\TextData\Extract::mid
NUMBERSTRING             | **Not yet Implemented**
NUMBERVALUE              | \PhpSpreadsheet\Calculation\TextData\Format::NUMBERVALUE
PHONETIC                 | **Not yet Implemented**
PROPER                   | \PhpSpreadsheet\Calculation\TextData\CaseConvert::proper
REPLACE                  | \PhpSpreadsheet\Calculation\TextData\Replace::replace
REPLACEB                 | \PhpSpreadsheet\Calculation\TextData\Replace::replace
REPT                     | \PhpSpreadsheet\Calculation\TextData\Concatenate::builtinREPT
RIGHT                    | \PhpSpreadsheet\Calculation\TextData\Extract::right
RIGHTB                   | \PhpSpreadsheet\Calculation\TextData\Extract::right
SEARCH                   | \PhpSpreadsheet\Calculation\TextData\Search::insensitive
SEARCHB                  | \PhpSpreadsheet\Calculation\TextData\Search::insensitive
SUBSTITUTE               | \PhpSpreadsheet\Calculation\TextData\Replace::substitute
T                        | \PhpSpreadsheet\Calculation\TextData\Text::test
TEXT                     | \PhpSpreadsheet\Calculation\TextData\Format::TEXTFORMAT
TEXTAFTER                | **Not yet Implemented**
TEXTBEFORE               | **Not yet Implemented**
TEXTJOIN                 | \PhpSpreadsheet\Calculation\TextData\Concatenate::TEXTJOIN
TEXTSPLIT                | **Not yet Implemented**
THAIDIGIT                | **Not yet Implemented**
THAINUMSOUND             | **Not yet Implemented**
THAINUMSTRING            | **Not yet Implemented**
THAISTRINGLENGTH         | **Not yet Implemented**
TRIM                     | \PhpSpreadsheet\Calculation\TextData\Trim::spaces
UNICHAR                  | \PhpSpreadsheet\Calculation\TextData\CharacterConvert::character
UNICODE                  | \PhpSpreadsheet\Calculation\TextData\CharacterConvert::code
UPPER                    | \PhpSpreadsheet\Calculation\TextData\CaseConvert::upper
VALUE                    | \PhpSpreadsheet\Calculation\TextData\Format::VALUE
VALUETOTEXT              | **Not yet Implemented**

## CATEGORY_WEB

Excel Function           | PhpSpreadsheet Function
-------------------------|--------------------------------------
ENCODEURL                | \PhpSpreadsheet\Calculation\Web\Service::urlEncode
FILTERXML                | **Not yet Implemented**
WEBSERVICE               | \PhpSpreadsheet\Calculation\Web\Service::webService
