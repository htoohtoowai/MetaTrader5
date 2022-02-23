<?php
namespace Yehtoo\MetaTrader5\Lib;

//+------------------------------------------------------------------+
//|                                             MetaTrader 5 Web API |
//|                   Copyright 2000-2021, MetaQuotes Software Corp. |
//|                                        http://www.metaquotes.net |
//+------------------------------------------------------------------+
/**
 * economical industries
 */
class EnIndustries
{
    const INDUSTRY_UNDEFINED            =0;
    //---
    //--- Basic Materials
    //---
    const INDUSTRY_AGRICULTURAL_INPUTS  =1;
    const INDUSTRY_ALUMINIUM            =2;
    const INDUSTRY_BUILDING_MATERIALS   =3;
    const INDUSTRY_CHEMICALS            =4;
    const INDUSTRY_COKING_COAL          =5;
    const INDUSTRY_COPPER               =6;
    const INDUSTRY_GOLD                 =7;
    const INDUSTRY_LUMBER_WOOD          =8;
    const INDUSTRY_INDUSTRIAL_METALS    =9;
    const INDUSTRY_PRECIOUS_METALS      =10;
    const INDUSTRY_PAPER                =11;
    const INDUSTRY_SILVER               =12;
    const INDUSTRY_SPECIALTY_CHEMICALS  =13;
    const INDUSTRY_STEEL                =14;
    //--- enumeration borders
    const INDUSTRY_BASIC_MATERIALS_FIRST=1;
    const INDUSTRY_BASIC_MATERIALS_LAST =14;
    const INDUSTRY_BASIC_MATERIALS_END  =50;
    //---
    //--- Communication Services
    //---
    const INDUSTRY_ADVERTISING          =51;
    const INDUSTRY_BROADCASTING         =52;
    const INDUSTRY_GAMING_MULTIMEDIA    =53;
    const INDUSTRY_ENTERTAINMENT        =54;
    const INDUSTRY_INTERNET_CONTENT     =55;
    const INDUSTRY_PUBLISHING           =56;
    const INDUSTRY_TELECOM              =57;
    //--- enumeration borders
    const INDUSTRY_COMMUNICATION_FIRST  =51;
    const INDUSTRY_COMMUNICATION_LAST   =57;
    const INDUSTRY_COMMUNICATION_END    =100;
    //---
    //--- Consumer Cyclical
    //---
    const INDUSTRY_APPAREL_MANUFACTURING=101;
    const INDUSTRY_APPAREL_RETAIL       =102;
    const INDUSTRY_AUTO_MANUFACTURERS   =103;
    const INDUSTRY_AUTO_PARTS           =104;
    const INDUSTRY_AUTO_DEALERSHIP      =105;
    const INDUSTRY_DEPARTMENT_STORES    =106;
    const INDUSTRY_FOOTWEAR_ACCESSORIES =107;
    const INDUSTRY_FURNISHINGS          =108;
    const INDUSTRY_GAMBLING             =109;
    const INDUSTRY_HOME_IMPROV_RETAIL   =110;
    const INDUSTRY_INTERNET_RETAIL      =111;
    const INDUSTRY_LEISURE              =112;
    const INDUSTRY_LODGING              =113;
    const INDUSTRY_LUXURY_GOODS         =114;
    const INDUSTRY_PACKAGING_CONTAINERS =115;
    const INDUSTRY_PERSONAL_SERVICES    =116;
    const INDUSTRY_RECREATIONAL_VEHICLES=117;
    const INDUSTRY_RESIDENT_CONSTRUCTION=118;
    const INDUSTRY_RESORTS_CASINOS      =119;
    const INDUSTRY_RESTAURANTS          =120;
    const INDUSTRY_SPECIALTY_RETAIL     =121;
    const INDUSTRY_TEXTILE_MANUFACTURING=122;
    const INDUSTRY_TRAVEL_SERVICES      =123;
    //--- enumeration borders
    const INDUSTRY_CONSUMER_CYCL_FIRST  =101;
    const INDUSTRY_CONSUMER_CYCL_LAST   =123;
    const INDUSTRY_CONSUMER_CYCL_END    =150;
    //---
    //--- Consumer Defensive
    //---
    const INDUSTRY_BEVERAGES_BREWERS    =151;
    const INDUSTRY_BEVERAGES_NON_ALCO   =152;
    const INDUSTRY_BEVERAGES_WINERIES   =153;
    const INDUSTRY_CONFECTIONERS        =154;
    const INDUSTRY_DISCOUNT_STORES      =155;
    const INDUSTRY_EDUCATION_TRAINIG    =156;
    const INDUSTRY_FARM_PRODUCTS        =157;
    const INDUSTRY_FOOD_DISTRIBUTION    =158;
    const INDUSTRY_GROCERY_STORES       =159;
    const INDUSTRY_HOUSEHOLD_PRODUCTS   =160;
    const INDUSTRY_PACKAGED_FOODS       =161;
    const INDUSTRY_TOBACCO              =162;
    //--- enumeration borders
    const INDUSTRY_CONSUMER_DEF_FIRST   =151;
    const INDUSTRY_CONSUMER_DEF_LAST    =162;
    const INDUSTRY_CONSUMER_DEF_END     =200;
    //---
    //--- Energy
    //---
    const INDUSTRY_OIL_GAS_DRILLING     =201;
    const INDUSTRY_OIL_GAS_EP           =202;
    const INDUSTRY_OIL_GAS_EQUIPMENT    =203;
    const INDUSTRY_OIL_GAS_INTEGRATED   =204;
    const INDUSTRY_OIL_GAS_MIDSTREAM    =205;
    const INDUSTRY_OIL_GAS_REFINING     =206;
    const INDUSTRY_THERMAL_COAL         =207;
    const INDUSTRY_URANIUM              =208;
    //--- enumeration borders
    const INDUSTRY_ENERGY_FIRST         =201;
    const INDUSTRY_ENERGY_LAST          =208;
    const INDUSTRY_ENERGY_END           =250;
    //---
    //--- Financial
    //---
    const INDUSTRY_EXCHANGE_TRADED_FUND   =251;
    const INDUSTRY_ASSETS_MANAGEMENT      =252;
    const INDUSTRY_BANKS_DIVERSIFIED      =253;
    const INDUSTRY_BANKS_REGIONAL         =254;
    const INDUSTRY_CAPITAL_MARKETS        =255;
    const INDUSTRY_CLOSE_END_FUND_DEBT    =256;
    const INDUSTRY_CLOSE_END_FUND_EQUITY  =257;
    const INDUSTRY_CLOSE_END_FUND_FOREIGN =258;
    const INDUSTRY_CREDIT_SERVICES        =259;
    const INDUSTRY_FINANCIAL_CONGLOMERATE =260;
    const INDUSTRY_FINANCIAL_DATA_EXCHANGE=261;
    const INDUSTRY_INSURANCE_BROKERS      =262;
    const INDUSTRY_INSURANCE_DIVERSIFIED  =263;
    const INDUSTRY_INSURANCE_LIFE         =264;
    const INDUSTRY_INSURANCE_PROPERTY     =265;
    const INDUSTRY_INSURANCE_REINSURANCE  =266;
    const INDUSTRY_INSURANCE_SPECIALTY    =267;
    const INDUSTRY_MORTGAGE_FINANCE       =268;
    const INDUSTRY_SHELL_COMPANIES        =269;
    //--- enumeration borders
    const INDUSTRY_FINANCIAL_FIRST        =251;
    const INDUSTRY_FINANCIAL_LAST         =269;
    const INDUSTRY_FINANCIAL_END          =300;
    //---
    //--- Healthcare
    //---
    const INDUSTRY_BIOTECHNOLOGY        =301;
    const INDUSTRY_DIAGNOSTICS_RESEARCH =302;
    const INDUSTRY_DRUGS_MANUFACTURERS  =303;
    const INDUSTRY_DRUGS_MANUFACTURERS_SPEC=304;
    const INDUSTRY_HEALTHCARE_PLANS     =305;
    const INDUSTRY_HEALTH_INFORMATION   =306;
    const INDUSTRY_MEDICAL_FACILITIES   =307;
    const INDUSTRY_MEDICAL_DEVICES      =308;
    const INDUSTRY_MEDICAL_DISTRIBUTION =309;
    const INDUSTRY_MEDICAL_INSTRUMENTS  =310;
    const INDUSTRY_PHARM_RETAILERS      =311;
    //--- enumeration borders
    const INDUSTRY_HEALTHCARE_FIRST     =301;
    const INDUSTRY_HEALTHCARE_LAST      =311;
    const INDUSTRY_HEALTHCARE_END       =350;
    //---
    //--- Industrials
    //---
    const INDUSTRY_AEROSPACE_DEFENSE    =351;
    const INDUSTRY_AIRLINES             =352;
    const INDUSTRY_AIRPORTS_SERVICES    =353;
    const INDUSTRY_BUILDING_PRODUCTS    =354;
    const INDUSTRY_BUSINESS_EQUIPMENT   =355;
    const INDUSTRY_CONGLOMERATES        =356;
    const INDUSTRY_CONSULTING_SERVICES  =357;
    const INDUSTRY_ELECTRICAL_EQUIPMENT =358;
    const INDUSTRY_ENGINEERING_CONSTRUCTION  =359;
    const INDUSTRY_FARM_HEAVY_MACHINERY      =360;
    const INDUSTRY_INDUSTRIAL_DISTRIBUTION   =361;
    const INDUSTRY_INFRASTRUCTURE_OPERATIONS =362;
    const INDUSTRY_FREIGHT_LOGISTICS    =363;
    const INDUSTRY_MARINE_SHIPPING      =364;
    const INDUSTRY_METAL_FABRICATION    =365;
    const INDUSTRY_POLLUTION_CONTROL    =366;
    const INDUSTRY_RAILROADS            =367;
    const INDUSTRY_RENTAL_LEASING       =368;
    const INDUSTRY_SECURITY_PROTECTION  =369;
    const INDUSTRY_SPEALITY_BUSINESS_SERVICES=370;
    const INDUSTRY_SPEALITY_MACHINERY   =371;
    const INDUSTRY_STUFFING_EMPLOYMENT  =372;
    const INDUSTRY_TOOLS_ACCESSORIES    =373;
    const INDUSTRY_TRUCKING             =374;
    const INDUSTRY_WASTE_MANAGEMENT     =375;
    //--- enumeration borders
    const INDUSTRY_INDUSTRIALS_FIRST    =351;
    const INDUSTRY_INDUSTRIALS_LAST     =375;
    const INDUSTRY_INDUSTRIALS_END      =400;
    //---
    //--- Real Estate
    //---
    const INDUSTRY_REAL_ESTATE_DEVELOPMENT=401;
    const INDUSTRY_REAL_ESTATE_DIVERSIFIED=402;
    const INDUSTRY_REAL_ESTATE_SERVICES   =403;
    const INDUSTRY_REIT_DIVERSIFIED     =404;
    const INDUSTRY_REIT_HEALTCARE       =405;
    const INDUSTRY_REIT_HOTEL_MOTEL     =406;
    const INDUSTRY_REIT_INDUSTRIAL      =407;
    const INDUSTRY_REIT_MORTAGE         =408;
    const INDUSTRY_REIT_OFFICE          =409;
    const INDUSTRY_REIT_RESIDENTAL      =410;
    const INDUSTRY_REIT_RETAIL          =411;
    const INDUSTRY_REIT_SPECIALITY      =412;
    //--- enumeration borders
    const INDUSTRY_REAL_ESTATE_FIRST    =401;
    const INDUSTRY_REAL_ESTATE_LAST     =412;
    const INDUSTRY_REAL_ESTATE_END      =450;
    //---
    //--- Technology
    //---
    const INDUSTRY_COMMUNICATION_EQUIPMENT=451;
    const INDUSTRY_COMPUTER_HARDWARE      =452;
    const INDUSTRY_CONSUMER_ELECTRONICS   =453;
    const INDUSTRY_ELECTRONIC_COMPONENTS  =454;
    const INDUSTRY_ELECTRONIC_DISTRIBUTION=455;
    const INDUSTRY_IT_SERVICES            =456;
    const INDUSTRY_SCIENTIFIC_INSTRUMENTS =457;
    const INDUSTRY_SEMICONDUCTOR_EQUIPMENT=458;
    const INDUSTRY_SEMICONDUCTORS         =459;
    const INDUSTRY_SOFTWARE_APPLICATION   =460;
    const INDUSTRY_SOFTWARE_INFRASTRUCTURE=461;
    const INDUSTRY_SOLAR                  =462;
    //--- enumeration borders
    const INDUSTRY_TECHNOLOGY_FIRST       =451;
    const INDUSTRY_TECHNOLOGY_LAST        =462;
    const INDUSTRY_TECHNOLOGY_END         =500;
    //---
    //--- Utilities
    //---
    const INDUSTRY_UTILITIES_DIVERSIFIED       =501;
    const INDUSTRY_UTILITIES_POWERPRODUCERS    =502;
    const INDUSTRY_UTILITIES_RENEWABLE         =503;
    const INDUSTRY_UTILITIES_REGULATED_ELECTRIC=504;
    const INDUSTRY_UTILITIES_REGULATED_GAS     =505;
    const INDUSTRY_UTILITIES_REGULATED_WATER   =506;
    //--- enumeration borders
    const INDUSTRY_UTILITIES_FIRST        =501;
    const INDUSTRY_UTILITIES_LAST         =506;
    const INDUSTRY_UTILITIES_END          =550;
    //---
    //--- Commodities
    //---
    const INDUSTRY_COMMODITIES_AGRICULTURAL=551;
    const INDUSTRY_COMMODITIES_ENERGY     =552;
    const INDUSTRY_COMMODITIES_METALS     =553;
    const INDUSTRY_COMMODITIES_PRECIOUS   =554;
    //--- enumeration borders
    const INDUSTRY_COMMODITIES_FIRST      =551;
    const INDUSTRY_COMMODITIES_LAST       =554;
    const INDUSTRY_COMMODITIES_END        =600;
    //--- enumeration borders
    const INDUSTRY_FIRST                  =0;
    const INDUSTRY_LAST                   =EnIndustries::INDUSTRY_COMMODITIES_LAST;
}
