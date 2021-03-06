<?php
namespace twikilib\wrap;

use twikilib\core\ITopic;

/**
 * This interface just marks classes that provide
 * higher-level API to the different types of topics.
 *
 * See the inheritance hierarchy.
 *
 * @author Viliam Simko
 */
interface ITopicWrapper {

	/**
	 * @return twikilib\core\ITopic
	 */
	function getWrappedTopic();
}