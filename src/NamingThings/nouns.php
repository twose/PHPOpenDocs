<?php

declare(strict_types = 1);

namespace NamingThings;

$nouns = [];

// TODO
// JobRunner or Executor.

// $nouns[] = Noun('abort', '', []);
// $nouns[] = Noun('absolute', '', []);
// $nouns[] = Noun('acc', '', []);
// $nouns[] = Noun('access', '', []);
// $nouns[] = Noun('accessor', '', []);
// $nouns[] = Noun('action', '', []);
// $nouns[] = Noun('activation', '', []);
// $nouns[] = Noun('activity', '', []);
// $nouns[] = Noun('actor', '', []);
// $nouns[] = Noun('adapter', '', []);
// $nouns[] = Noun('address', '', []);
// $nouns[] = Noun('adorner', '', []);
// $nouns[] = Noun('affinity', '', []);
// $nouns[] = Noun('aggregate', '', []);
// $nouns[] = Noun('algorithm', '', []);
// $nouns[] = Noun('alias', '', []);
// $nouns[] = Noun('alignment', '', []);
// $nouns[] = Noun('analyzer', '', []);
// $nouns[] = Noun('anchor', '', []);
// $nouns[] = Noun('angle', '', []);
// $nouns[] = Noun('animation', '', []);
// $nouns[] = Noun('annotation', '', []);
// $nouns[] = Noun('application', '', []);
// $nouns[] = Noun('area', '', []);
// $nouns[] = Noun('argument', '', []);
// $nouns[] = Noun('array', '', []);
// $nouns[] = Noun('arrow', '', []);
// $nouns[] = Noun('asp', '', []);
// $nouns[] = Noun('assembly', '', []);
// $nouns[] = Noun('assertion', '', []);
// $nouns[] = Noun('assignment', '', []);
// $nouns[] = Noun('association', '', []);
// $nouns[] = Noun('atom', '', []);
// $nouns[] = Noun('attribute', '', []);
// $nouns[] = Noun('audio', '', []);
// $nouns[] = Noun('audit', '', []);
// $nouns[] = Noun('authentication', '', []);
// $nouns[] = Noun('authenticator', '', []);
// $nouns[] = Noun('authorization', '', []);
// $nouns[] = Noun('automation', '', []);
// $nouns[] = Noun('ax', '', []);
// $nouns[] = Noun('axis', '', []);
// $nouns[] = Noun('background', '', []);
// $nouns[] = Noun('bad', '', []);
// $nouns[] = Noun('bar', '', []);
// $nouns[] = Noun('base', '', []);
// $nouns[] = Noun('basic', '', []);
// $nouns[] = Noun('batch', '', []);
// $nouns[] = Noun('begin', '', []);
// $nouns[] = Noun('behavior', '', []);
// $nouns[] = Noun('binary', '', []);
// $nouns[] = Noun('bind', '', []);
// $nouns[] = Noun('binder', '', []);
// $nouns[] = Noun('binding', '', []);
// $nouns[] = Noun('bit', '', []);
// $nouns[] = Noun('bitmap', '', []);
// $nouns[] = Noun('blob', '', []);
// $nouns[] = Noun('block', '', []);
// $nouns[] = Noun('blue', '', []);
// $nouns[] = Noun('body', '', []);
// $nouns[] = Noun('bookmark', '', []);
// $nouns[] = Noun('border', '', []);
// $nouns[] = Noun('bottom', '', []);
// $nouns[] = Noun('bound', '', []);
// $nouns[] = Noun('boundary', '', []);
// $nouns[] = Noun('bounds', '', []);
// $nouns[] = Noun('box', '', []);
// $nouns[] = Noun('branch', '', []);
// $nouns[] = Noun('break', '', []);
// $nouns[] = Noun('browser', '', []);
// $nouns[] = Noun('brush', '', []);
// $nouns[] = Noun('buffer', '', []);
// $nouns[] = Noun('build', '', []);
// $nouns[] = Noun('builder', '', []);
// $nouns[] = Noun('button', '', []);
// $nouns[] = Noun('byte', '', []);
// $nouns[] = Noun('cache', '', []);
// $nouns[] = Noun('calendar', '', []);
// $nouns[] = Noun('call', '', []);
// $nouns[] = Noun('callback', '', []);
// $nouns[] = Noun('cancel', '', []);
// $nouns[] = Noun('cancellation', '', []);
// $nouns[] = Noun('candidate', '', []);
// $nouns[] = Noun('cant', '', []);
// $nouns[] = Noun('cap', '', []);
// $nouns[] = Noun('capability', '', []);
// $nouns[] = Noun('capacity', '', []);
// $nouns[] = Noun('caption', '', []);
// $nouns[] = Noun('caret', '', []);
// $nouns[] = Noun('case', '', []);
// $nouns[] = Noun('catalog', '', []);
// $nouns[] = Noun('category', '', []);
// $nouns[] = Noun('cell', '', []);
// $nouns[] = Noun('celt', '', []);
// $nouns[] = Noun('center', '', []);
// $nouns[] = Noun('cert', '', []);
// $nouns[] = Noun('certificate', '', []);
// $nouns[] = Noun('chain', '', []);
// $nouns[] = Noun('change', '', []);
// $nouns[] = Noun('channel', '', []);
// $nouns[] = Noun('char', '', []);
// $nouns[] = Noun('character', '', []);
// $nouns[] = Noun('chart', '', []);
// $nouns[] = Noun('check', '', []);
// $nouns[] = Noun('child', '', []);
// $nouns[] = Noun('choice', '', []);
// $nouns[] = Noun('cider', '', []);
// $nouns[] = Noun('claim', '', []);
// $nouns[] = Noun('class', '', []);
// $nouns[] = Noun('classification', '', []);
// $nouns[] = Noun('clause', '', []);
// $nouns[] = Noun('clear', '', []);
// $nouns[] = Noun('click', '', []);
// $nouns[] = Noun('client', '', []);
// $nouns[] = Noun('clip', '', []);
// $nouns[] = Noun('code', '', []);
// $nouns[] = Noun('col', '', []);
// $nouns[] = Noun('collation', '', []);
// $nouns[] = Noun('collection', '', []);
// $nouns[] = Noun('color', '', []);
// $nouns[] = Noun('colors', '', []);
// $nouns[] = Noun('column', '', []);
// $nouns[] = Noun('command', '', []);
// $nouns[] = Noun('comment', '', []);
// $nouns[] = Noun('common', '', []);
// $nouns[] = Noun('compare', '', []);
// $nouns[] = Noun('comparer', '', []);
// $nouns[] = Noun('comparison', '', []);
// $nouns[] = Noun('compilation', '', []);
// $nouns[] = Noun('compiler', '', []);
// $nouns[] = Noun('completion', '', []);
// $nouns[] = Noun('complex', '', []);
// $nouns[] = Noun('component', '', []);
// $nouns[] = Noun('composite', '', []);
// $nouns[] = Noun('composition', '', []);
// $nouns[] = Noun('condition', '', []);
// $nouns[] = Noun('configuration', '', []);
// $nouns[] = Noun('connection', '', []);
// $nouns[] = Noun('connector', '', []);
// $nouns[] = Noun('constant', '', []);
// $nouns[] = Noun('constraint', '', []);
// $nouns[] = Noun('constructor', '', []);
// $nouns[] = Noun('container', '', []);
// $nouns[] = Noun('content', '', []);
// $nouns[] = Noun('contents', '', []);
// $nouns[] = Noun('context', s'', []);
// $nouns[] = Noun('contract', '', []);
// $nouns[] = Noun('control', '', []);
// $nouns[] = Noun('controller', '', []);
// $nouns[] = Noun('conversion', '', []);
// $nouns[] = Noun('convert', '', []);
// $nouns[] = Noun('converter', '', []);
// $nouns[] = Noun('cookie', '', []);
// $nouns[] = Noun('coordinator', '', []);
// $nouns[] = Noun('copy', '', []);
// $nouns[] = Noun('core', '', []);
// $nouns[] = Noun('correlation', '', []);
// $nouns[] = Noun('count', '', []);
// $nouns[] = Noun('counter', '', []);
// $nouns[] = Noun('creation', '', []);
// $nouns[] = Noun('creator', '', []);
// $nouns[] = Noun('credential', '', []);
// $nouns[] = Noun('credentials', '', []);
// $nouns[] = Noun('criterion', '', []);
// $nouns[] = Noun('culture', '', []);
// $nouns[] = Noun('cursor', '', []);
// $nouns[] = Noun('custom', '', []);
// $nouns[] = Noun('daily', '', []);
// $nouns[] = Noun('dark', '', []);
// $nouns[] = Noun('dash', '', []);
// $nouns[] = Noun('database', '', []);
// $nouns[] = Noun('date', '', []);
// $nouns[] = Noun('datum', s'', []);
// $nouns[] = Noun('day', '', []);
// $nouns[] = Noun('db', '', []);
// $nouns[] = Noun('de', '', []);
// $nouns[] = Noun('debugger', '', []);
// $nouns[] = Noun('decimal', '', []);
// $nouns[] = Noun('declaration', '', []);
// $nouns[] = Noun('default', '', []);
// $nouns[] = Noun('definition', '', []);
// $nouns[] = Noun('delay', '', []);
// $nouns[] = Noun('delegate', '', []);
// $nouns[] = Noun('delta', '', []);
// $nouns[] = Noun('dependency', '', []);
// $nouns[] = Noun('dependent', '', []);
// $nouns[] = Noun('deployment', '', []);
// $nouns[] = Noun('depth', '', []);
// $nouns[] = Noun('description', '', []);
// $nouns[] = Noun('descriptor', '', []);
// $nouns[] = Noun('design', '', []);
// $nouns[] = Noun('designer', '', []);
// $nouns[] = Noun('destination', '', []);
// $nouns[] = Noun('detail', '', []);
// $nouns[] = Noun('details', '', []);
// $nouns[] = Noun('device', '', []);
// $nouns[] = Noun('diagram', '', []);
// $nouns[] = Noun('dialog', '', []);
// $nouns[] = Noun('dictionary', '', []);
// $nouns[] = Noun('digest', '', []);
// $nouns[] = Noun('digit', '', []);
// $nouns[] = Noun('direction', '', []);
// $nouns[] = Noun('directive', '', []);
// $nouns[] = Noun('directory', '', []);
// $nouns[] = Noun('disabled', '', []);
// $nouns[] = Noun('discovery', '', []);
// $nouns[] = Noun('dispatch', '', []);
// $nouns[] = Noun('dispatcher', '', []);
// $nouns[] = Noun('distance', '', []);
// $nouns[] = Noun('doc', '', []);
// $nouns[] = Noun('dock', '', []);
// $nouns[] = Noun('document', '', []);
// $nouns[] = Noun('doe', '', []);
// $nouns[] = Noun('domain', '', []);
// $nouns[] = Noun('dot', '', []);
// $nouns[] = Noun('double', '', []);
// $nouns[] = Noun('dp', '', []);
// $nouns[] = Noun('draw', '', []);
// $nouns[] = Noun('drawing', '', []);
// $nouns[] = Noun('duplex', '', []);
// $nouns[] = Noun('duplicate', '', []);
// $nouns[] = Noun('duration', '', []);
// $nouns[] = Noun('edge', '', []);
// $nouns[] = Noun('editing', '', []);
// $nouns[] = Noun('editor', '', []);
// $nouns[] = Noun('element', '', []);
// $nouns[] = Noun('elements', '', []);
// $nouns[] = Noun('emf', '', []);
// $nouns[] = Noun('encoder', '', []);
// $nouns[] = Noun('encoding', '', []);
// $nouns[] = Noun('encryption', '', []);
// $nouns[] = Noun('end', '', []);
// $nouns[] = Noun('endpoint', '', []);
// $nouns[] = Noun('engine', '', []);
// $nouns[] = Noun('engineer', '', []);
// $nouns[] = Noun('enlistment', '', []);
// $nouns[] = Noun('entity', '', []);
// $nouns[] = Noun('entry', '', []);
// $nouns[] = Noun('enumerator', '', []);
// $nouns[] = Noun('envelope', '', []);
// $nouns[] = Noun('environment', '', []);
// $nouns[] = Noun('error', '', []);
// $nouns[] = Noun('escape', '', []);
// $nouns[] = Noun('event', s'', []);
// $nouns[] = Noun('exception', '', []);
// $nouns[] = Noun('exec', '', []);
// $nouns[] = Noun('execution', '', []);
// $nouns[] = Noun('executor', '', []);
// $nouns[] = Noun('exit', '', []);
// $nouns[] = Noun('expansion', '', []);
// $nouns[] = Noun('explorer', '', []);
// $nouns[] = Noun('export', '', []);
// $nouns[] = Noun('exporter', '', []);
// $nouns[] = Noun('expression', '', []);
// $nouns[] = Noun('extender', '', []);
// $nouns[] = Noun('extension', '', []);
// $nouns[] = Noun('extent', '', []);
// $nouns[] = Noun('extra', '', []);
// $nouns[] = Noun('facet', '', []);
// $nouns[] = Noun('factor', '', []);
// $nouns[] = Noun('factory', '', []);
// $nouns[] = Noun('failure', '', []);
// $nouns[] = Noun('fallback', '', []);
// $nouns[] = Noun('family', '', []);
// $nouns[] = Noun('fault', '', []);
// $nouns[] = Noun('feature', '', []);
// $nouns[] = Noun('field', '', []);
// $nouns[] = Noun('file', '', []);
// $nouns[] = Noun('filename', '', []);
// $nouns[] = Noun('fill', '', []);
// $nouns[] = Noun('filter', '', []);
// $nouns[] = Noun('final', '', []);
// $nouns[] = Noun('fire', '', []);
// $nouns[] = Noun('flag', '', []);
// $nouns[] = Noun('floating', '', []);
// $nouns[] = Noun('flow', '', []);
// $nouns[] = Noun('focus', '', []);
// $nouns[] = Noun('folder', '', []);
// $nouns[] = Noun('font', '', []);
// $nouns[] = Noun('force', '', []);
// $nouns[] = Noun('fore', '', []);
// $nouns[] = Noun('form', '', []);
// $nouns[] = Noun('format', '', []);
// $nouns[] = Noun('formatter', '', []);
// $nouns[] = Noun('formatting', '', []);
// $nouns[] = Noun('formula', '', []);
// $nouns[] = Noun('forward', '', []);
// $nouns[] = Noun('fragment', '', []);
// $nouns[] = Noun('frame', '', []);
// $nouns[] = Noun('framework', '', []);
// $nouns[] = Noun('free', '', []);
// $nouns[] = Noun('front', '', []);
// $nouns[] = Noun('ft', '', []);
// $nouns[] = Noun('full', '', []);
// $nouns[] = Noun('function', '', []);
// $nouns[] = Noun('gen', '', []);
// $nouns[] = Noun('generation', '', []);
// $nouns[] = Noun('generator', '', []);
// $nouns[] = Noun('geometry', '', []);
// $nouns[] = Noun('get', '', []);
// $nouns[] = Noun('getter', '', []);
// $nouns[] = Noun('glyph', '', []);
// $nouns[] = Noun('gradient', '', []);
// $nouns[] = Noun('grammar', '', []);
// $nouns[] = Noun('graph', '', []);
// $nouns[] = Noun('graphics', '', []);
// $nouns[] = Noun('green', '', []);
// $nouns[] = Noun('grid', '', []);
// $nouns[] = Noun('group', '', []);
// $nouns[] = Noun('handle', '', []);
// $nouns[] = Noun('handler', '', []);
// $nouns[] = Noun('hash', '', []);
// $nouns[] = Noun('have', '', []);
// $nouns[] = Noun('header', '', []);
// $nouns[] = Noun('height', '', []);
// $nouns[] = Noun('help', '', []);
// $nouns[] = Noun('helper', '', []);
// $nouns[] = Noun('hide', '', []);
// $nouns[] = Noun('hierarchy', '', []);
// $nouns[] = Noun('high', '', []);
// $nouns[] = Noun('highlight', '', []);
// $nouns[] = Noun('hint', '', []);
// $nouns[] = Noun('hit', '', []);
// $nouns[] = Noun('horizontal', '', []);
// $nouns[] = Noun('host', '', []);
// $nouns[] = Noun('hr', '', []);
// $nouns[] = Noun('html', '', []);
// $nouns[] = Noun('http', '', []);
// $nouns[] = Noun('icon', '', []);
// $nouns[] = Noun('id', s'', []);
// $nouns[] = Noun('identifier', '', []);
// $nouns[] = Noun('identity', '', []);
// $nouns[] = Noun('idle', '', []);
// $nouns[] = Noun('image', '', []);
// $nouns[] = Noun('impersonation', '', []);
// $nouns[] = Noun('implementation', '', []);
// $nouns[] = Noun('import', '', []);
// $nouns[] = Noun('importer', '', []);
// $nouns[] = Noun('indent', '', []);
// $nouns[] = Noun('index', s'', []);
// $nouns[] = Noun('info', '', []);
// $nouns[] = Noun('information', '', []);
// $nouns[] = Noun('inheritance', '', []);
// $nouns[] = Noun('initial', '', []);
// $nouns[] = Noun('initialization', '', []);
// $nouns[] = Noun('initializer', '', []);
// $nouns[] = Noun('input', '', []);
// $nouns[] = Noun('inspector', '', []);
// $nouns[] = Noun('instance', '', []);
// $nouns[] = Noun('integer', '', []);
// $nouns[] = Noun('interface', '', []);
// $nouns[] = Noun('interpretation', '', []);
// $nouns[] = Noun('interval', '', []);
// $nouns[] = Noun('ip', '', []);
// $nouns[] = Noun('issuer', '', []);
// $nouns[] = Noun('item', s'', []);
// $nouns[] = Noun('iterator', '', []);
// $nouns[] = Noun('job', '', []);
// $nouns[] = Noun('join', '', []);
// $nouns[] = Noun('keep', '', []);
// $nouns[] = Noun('key word', '', []);
// $nouns[] = Noun('key', s'', []);
// $nouns[] = Noun('kind', '', []);
// $nouns[] = Noun('label', '', []);
// $nouns[] = Noun('language', '', []);
// $nouns[] = Noun('large', '', []);
// $nouns[] = Noun('layer', '', []);
// $nouns[] = Noun('layout', '', []);
// $nouns[] = Noun('leave', '', []);
// $nouns[] = Noun('left', '', []);
// $nouns[] = Noun('legend', '', []);
// $nouns[] = Noun('length', '', []);
// $nouns[] = Noun('level', '', []);
// $nouns[] = Noun('library', '', []);
// $nouns[] = Noun('license', '', []);
// $nouns[] = Noun('light', '', []);
// $nouns[] = Noun('limit', '', []);
// $nouns[] = Noun('line', '', []);
// $nouns[] = Noun('link', '', []);
// $nouns[] = Noun('list', '', []);
// $nouns[] = Noun('listener', '', []);
// $nouns[] = Noun('literal', '', []);
// $nouns[] = Noun('load', '', []);
// $nouns[] = Noun('loader', '', []);
// $nouns[] = Noun('loading', '', []);
// $nouns[] = Noun('local', '', []);
// $nouns[] = Noun('locale', '', []);
// $nouns[] = Noun('location', '', []);
// $nouns[] = Noun('lock', '', []);
// $nouns[] = Noun('log', '', []);
// $nouns[] = Noun('logger', '', []);
// $nouns[] = Noun('logging', '', []);
// $nouns[] = Noun('login', '', []);
// $nouns[] = Noun('lookup', '', []);
// $nouns[] = Noun('loop', '', []);
// $nouns[] = Noun('low', '', []);
// $nouns[] = Noun('lower', '', []);
// $nouns[] = Noun('machine', '', []);
// $nouns[] = Noun('major', '', []);
// $nouns[] = Noun('man', '', []);
// $nouns[] = Noun('management', '', []);
// $nouns[] = Noun('manager', '', []);
// $nouns[] = Noun('manifest', '', []);
// $nouns[] = Noun('map', '', []);
// $nouns[] = Noun('mapping', '', []);
// $nouns[] = Noun('margin', '', []);
// $nouns[] = Noun('mark', '', []);
// $nouns[] = Noun('marker', '', []);
// $nouns[] = Noun('markup', '', []);
// $nouns[] = Noun('mask', '', []);
// $nouns[] = Noun('match', '', []);
// $nouns[] = Noun('matcher', '', []);
// $nouns[] = Noun('matrix', '', []);
// $nouns[] = Noun('max', '', []);
// $nouns[] = Noun('maximum', '', []);
// $nouns[] = Noun('md', '', []);
// $nouns[] = Noun('medium', '', []);
// $nouns[] = Noun('member', '', []);
// $nouns[] = Noun('memory', '', []);
// $nouns[] = Noun('menu', '', []);
// $nouns[] = Noun('message', '', []);
// $nouns[] = Noun('messaging', '', []);
// $nouns[] = Noun('metadata', '', []);
// $nouns[] = Noun('method', '', []);
// $nouns[] = Noun('mi', '', []);
// $nouns[] = Noun('mime', '', []);
// $nouns[] = Noun('min', '', []);
// $nouns[] = Noun('minimum', '', []);
// $nouns[] = Noun('mismatch', '', []);
// $nouns[] = Noun('mobile', '', []);
// $nouns[] = Noun('mode', '', []);
// $nouns[] = Noun('model', '', []);
// $nouns[] = Noun('modifier', '', []);
// $nouns[] = Noun('module', '', []);
// $nouns[] = Noun('moniker', '', []);
// $nouns[] = Noun('monitor', '', []);
// $nouns[] = Noun('month', '', []);
// $nouns[] = Noun('more', '', []);
// $nouns[] = Noun('mouse', '', []);
// $nouns[] = Noun('ms', '', []);
// $nouns[] = Noun('msg', '', []);
// $nouns[] = Noun('multiple', '', []);
// $nouns[] = Noun('name', s'', []);
// $nouns[] = Noun('namespace', '', []);
// $nouns[] = Noun('navigation', '', []);
// $nouns[] = Noun('navigator', '', []);
// $nouns[] = Noun('need', '', []);
// $nouns[] = Noun('negative', '', []);
// $nouns[] = Noun('negotiation', '', []);
// $nouns[] = Noun('neighbor', '', []);
// $nouns[] = Noun('net', '', []);
// $nouns[] = Noun('network', '', []);
// $nouns[] = Noun('node', s'', []);
// $nouns[] = Noun('none', '', []);
// $nouns[] = Noun('normal', '', []);
// $nouns[] = Noun('notification', '', []);
// $nouns[] = Noun('null', '', []);
// $nouns[] = Noun('number', '', []);
// $nouns[] = Noun('object', '', []);
// $nouns[] = Noun('office', '', []);
// $nouns[] = Noun('offset', '', []);
// $nouns[] = Noun('ok', '', []);
// $nouns[] = Noun('old', '', []);
// $nouns[] = Noun('opcode', '', []);
// $nouns[] = Noun('operand', '', []);
// $nouns[] = Noun('operation', '', []);
// $nouns[] = Noun('operations', '', []);
// $nouns[] = Noun('operator', '', []);
// $nouns[] = Noun('option', '', []);
// $nouns[] = Noun('order', '', []);
// $nouns[] = Noun('ordinal', '', []);
// $nouns[] = Noun('orientation', '', []);
// $nouns[] = Noun('origin', '', []);
// $nouns[] = Noun('outline', '', []);
// $nouns[] = Noun('output', '', []);
// $nouns[] = Noun('overflow', '', []);
// $nouns[] = Noun('override', '', []);
// $nouns[] = Noun('owner', '', []);
// $nouns[] = Noun('package', '', []);
// $nouns[] = Noun('packet', '', []);
// $nouns[] = Noun('padding', '', []);
// $nouns[] = Noun('page', '', []);
// $nouns[] = Noun('pair', '', []);
// $nouns[] = Noun('pane', '', []);
// $nouns[] = Noun('panel', '', []);
// $nouns[] = Noun('para', '', []);
// $nouns[] = Noun('paragraph', '', []);
// $nouns[] = Noun('parameter', '', []);
// $nouns[] = Noun('parent', '', []);
// $nouns[] = Noun('parser', '', []);
// $nouns[] = Noun('part', '', []);
// $nouns[] = Noun('partial', '', []);
// $nouns[] = Noun('participant', '', []);
// $nouns[] = Noun('partition', '', []);
// $nouns[] = Noun('password', '', []);
// $nouns[] = Noun('path', '', []);
// $nouns[] = Noun('pattern', '', []);
// $nouns[] = Noun('payload', '', []);
// $nouns[] = Noun('pb', '', []);
// $nouns[] = Noun('pc', '', []);
// $nouns[] = Noun('pe', '', []);
// $nouns[] = Noun('peer', '', []);
// $nouns[] = Noun('pen', '', []);
// $nouns[] = Noun('percent', '', []);
// $nouns[] = Noun('performance', '', []);
// $nouns[] = Noun('permission', '', []);
// $nouns[] = Noun('persistence', '', []);
// $nouns[] = Noun('phase', '', []);
// $nouns[] = Noun('pi', '', []);
// $nouns[] = Noun('picker', '', []);
// $nouns[] = Noun('picture', '', []);
// $nouns[] = Noun('pipe', '', []);
// $nouns[] = Noun('pixel', '', []);
// $nouns[] = Noun('placement', '', []);
// $nouns[] = Noun('plan', '', []);
// $nouns[] = Noun('platform', '', []);
// $nouns[] = Noun('player', '', []);
// $nouns[] = Noun('plus', '', []);
// $nouns[] = Noun('point', '', []);
// $nouns[] = Noun('pointer', '', []);
// $nouns[] = Noun('policy', '', []);
// $nouns[] = Noun('pool', '', []);
// $nouns[] = Noun('pop-up', '', []);
// $nouns[] = Noun('populator', '', []);
// $nouns[] = Noun('port', '', []);
// $nouns[] = Noun('position', '', []);
// $nouns[] = Noun('post', '', []);
// $nouns[] = Noun('precision', '', []);
// $nouns[] = Noun('predicate', '', []);
// $nouns[] = Noun('prefix', '', []);
// $nouns[] = Noun('presentation', '', []);
// $nouns[] = Noun('presenter', '', []);
// $nouns[] = Noun('preserve', '', []);
// $nouns[] = Noun('preview', '', []);
// $nouns[] = Noun('primitive', '', []);
// $nouns[] = Noun('principal', '', []);
// $nouns[] = Noun('print', '', []);
// $nouns[] = Noun('priority', '', []);
// $nouns[] = Noun('private', '', []);
// $nouns[] = Noun('procedure', '', []);
// $nouns[] = Noun('process', '', []);
// $nouns[] = Noun('processing', '', []);
// $nouns[] = Noun('processor', '', []);
// $nouns[] = Noun('product', '', []);
// $nouns[] = Noun('profile', '', []);
// $nouns[] = Noun('progress', '', []);
// $nouns[] = Noun('project', '', []);
// $nouns[] = Noun('projection', '', []);
// $nouns[] = Noun('prompt', '', []);
// $nouns[] = Noun('prop', '', []);
// $nouns[] = Noun('property', s'', []);
// $nouns[] = Noun('props', '', []);
// $nouns[] = Noun('protection', '', []);
// $nouns[] = Noun('protocol', '', []);
// $nouns[] = Noun('prototype', '', []);
// $nouns[] = Noun('provider', '', []);
// $nouns[] = Noun('proxy', '', []);
// $nouns[] = Noun('public', '', []);
// $nouns[] = Noun('pva', '', []);
// $nouns[] = Noun('query', '', []);
// $nouns[] = Noun('queue', '', []);
// $nouns[] = Noun('quota', '', []);
// $nouns[] = Noun('quote', '', []);
// $nouns[] = Noun('radio', '', []);
// $nouns[] = Noun('radius', '', []);
// $nouns[] = Noun('range', '', []);
// $nouns[] = Noun('raw', '', []);
// $nouns[] = Noun('reader', '', []);
// $nouns[] = Noun('ready', '', []);
// $nouns[] = Noun('real', '', []);
// $nouns[] = Noun('reason', '', []);
// $nouns[] = Noun('recipient', '', []);
// $nouns[] = Noun('record', '', []);
// $nouns[] = Noun('rectangle', '', []);
// $nouns[] = Noun('ref', '', []);
// $nouns[] = Noun('reference', '', []);
// $nouns[] = Noun('reflection', '', []);
// $nouns[] = Noun('region', '', []);
// $nouns[] = Noun('register', '', []);
// $nouns[] = Noun('registration', '', []);
// $nouns[] = Noun('registry', '', []);
// $nouns[] = Noun('relation', '', []);
// $nouns[] = Noun('relationship', '', []);
// $nouns[] = Noun('relative', '', []);
// $nouns[] = Noun('release', '', []);
// $nouns[] = Noun('remote', '', []);
// $nouns[] = Noun('repeat', '', []);
// $nouns[] = Noun('replacement', '', []);
// $nouns[] = Noun('reply', '', []);
// $nouns[] = Noun('report', '', []);
// $nouns[] = Noun('request', '', []);
// $nouns[] = Noun('res', '', []);
// $nouns[] = Noun('reset', '', []);
// $nouns[] = Noun('resolution', '', []);
// $nouns[] = Noun('resolver', '', []);
$nouns[] = Noun(
    'resource',
    'A part of the computer that can be controlled by a program. Examples include files on a filesystem, the file system itself, network connections, database connections, processes.'
);
// $nouns[] = Noun('response', '', []);
// $nouns[] = Noun('result', '', []);
// $nouns[] = Noun('return', '', []);
// $nouns[] = Noun('reverse', '', []);
// $nouns[] = Noun('right', '', []);
// $nouns[] = Noun('role', '', []);
// $nouns[] = Noun('root', '', []);
// $nouns[] = Noun('route', '', []);
// $nouns[] = Noun('row', '', []);
// $nouns[] = Noun('rule', '', []);
// $nouns[] = Noun('run', '', []);
// $nouns[] = Noun('run-time', '', []);
// $nouns[] = Noun('same', '', []);
// $nouns[] = Noun('save', '', []);
// $nouns[] = Noun('sb', '', []);
// $nouns[] = Noun('scale', '', []);
// $nouns[] = Noun('scheduler', '', []);
// $nouns[] = Noun('schema', '', []);
// $nouns[] = Noun('scheme', '', []);
// $nouns[] = Noun('scope', '', []);
// $nouns[] = Noun('screen', '', []);
// $nouns[] = Noun('script', '', []);
// $nouns[] = Noun('scroll', '', []);
// $nouns[] = Noun('search', '', []);
// $nouns[] = Noun('second', '', []);
// $nouns[] = Noun('secondary', '', []);
// $nouns[] = Noun('section', '', []);
// $nouns[] = Noun('security', '', []);
// $nouns[] = Noun('segment', '', []);
// $nouns[] = Noun('selection', '', []);
// $nouns[] = Noun('selector', '', []);
// $nouns[] = Noun('self', '', []);
// $nouns[] = Noun('sender', '', []);
// $nouns[] = Noun('sent', '', []);
// $nouns[] = Noun('separator', '', []);
// $nouns[] = Noun('sequence', '', []);
// $nouns[] = Noun('serialization', '', []);
// $nouns[] = Noun('serializer', '', []);
// $nouns[] = Noun('series', '', []);
// $nouns[] = Noun('server', '', []);
// $nouns[] = Noun('service', '', []);
// $nouns[] = Noun('session', '', []);
// $nouns[] = Noun('set', '', []);
// $nouns[] = Noun('setter', '', []);
// $nouns[] = Noun('setting', '', []);
// $nouns[] = Noun('severity', '', []);
// $nouns[] = Noun('shadow', '', []);
// $nouns[] = Noun('shape', '', []);
// $nouns[] = Noun('share', '', []);
// $nouns[] = Noun('sharp', '', []);
// $nouns[] = Noun('shell', '', []);
// $nouns[] = Noun('shift', '', []);
// $nouns[] = Noun('short', '', []);
// $nouns[] = Noun('shutdown', '', []);
// $nouns[] = Noun('sibling', '', []);
// $nouns[] = Noun('side', '', []);
// $nouns[] = Noun('sign', '', []);
// $nouns[] = Noun('signature', '', []);
// $nouns[] = Noun('simple', '', []);
// $nouns[] = Noun('single', '', []);
// $nouns[] = Noun('singleton', '', []);
// $nouns[] = Noun('sink', '', []);
// $nouns[] = Noun('site', '', []);
// $nouns[] = Noun('size', '', []);
// $nouns[] = Noun('skip', '', []);
// $nouns[] = Noun('slot', '', []);
// $nouns[] = Noun('small', '', []);
// $nouns[] = Noun('smart', '', []);
// $nouns[] = Noun('snap', '', []);
// $nouns[] = Noun('snapshot', '', []);
// $nouns[] = Noun('soap', '', []);
// $nouns[] = Noun('socket', '', []);
// $nouns[] = Noun('solution', '', []);
// $nouns[] = Noun('sort', '', []);
// $nouns[] = Noun('source', '', []);
// $nouns[] = Noun('space', '', []);
// $nouns[] = Noun('span', '', []);
// $nouns[] = Noun('spec', '', []);
// $nouns[] = Noun('specific', '', []);
// $nouns[] = Noun('specification', '', []);
// $nouns[] = Noun('split', '', []);
// $nouns[] = Noun('sr', '', []);
// $nouns[] = Noun('stack', '', []);
// $nouns[] = Noun('standard', '', []);
// $nouns[] = Noun('start', '', []);
// $nouns[] = Noun('starting','', []);
// $nouns[] = Noun('startup', '', []);
// $nouns[] = Noun('state', '', []);
// $nouns[] = Noun('statement', '', []);
// $nouns[] = Noun('static', '', []);
// $nouns[] = Noun('status', '', []);
// $nouns[] = Noun('step', '', []);
// $nouns[] = Noun('storage', '', []);
// $nouns[] = Noun('store', '', []);
// $nouns[] = Noun('stream', '', []);
// $nouns[] = Noun('streaming', '', []);
// $nouns[] = Noun('string', '', []);
// $nouns[] = Noun('strings', '', []);
// $nouns[] = Noun('strip', '', []);
// $nouns[] = Noun('studio', '', []);
// $nouns[] = Noun('style', '', []);
// $nouns[] = Noun('subject', '', []);
// $nouns[] = Noun('subset', '', []);
// $nouns[] = Noun('success', '', []);
// $nouns[] = Noun('suffix', '', []);
// $nouns[] = Noun('suite', '', []);
// $nouns[] = Noun('summary', '', []);
// $nouns[] = Noun('support', '', []);
// $nouns[] = Noun('supporting', '', []);
// $nouns[] = Noun('surface', '', []);
// $nouns[] = Noun('surrogate', '', []);
// $nouns[] = Noun('switch', '', []);
// $nouns[] = Noun('symbol', '', []);
// $nouns[] = Noun('system', '', []);
// $nouns[] = Noun('tab', '', []);
// $nouns[] = Noun('table', '', []);
// $nouns[] = Noun('tag', '', []);
// $nouns[] = Noun('target', '', []);
// $nouns[] = Noun('task', '', []);
// $nouns[] = Noun('tcp', '', []);
// $nouns[] = Noun('temp', '', []);
// $nouns[] = Noun('template', '', []);
// $nouns[] = Noun('term', '', []);
// $nouns[] = Noun('test', '', []);
// $nouns[] = Noun('text', '', []);
// $nouns[] = Noun('theme', '', []);
// $nouns[] = Noun('thickness', '', []);
// $nouns[] = Noun('thread', '', []);
// $nouns[] = Noun('threshold', '', []);
// $nouns[] = Noun('tick', '', []);
// $nouns[] = Noun('ticket', '', []);
// $nouns[] = Noun('time out', '', []);
// $nouns[] = Noun('time', '', []);
// $nouns[] = Noun('timer', '', []);
// $nouns[] = Noun('timestamp', '', []);
// $nouns[] = Noun('tip', '', []);
// $nouns[] = Noun('title', '', []);
// $nouns[] = Noun('token', '', []);
// $nouns[] = Noun('tool', '', []);
// $nouns[] = Noun('toolbar', '', []);
// $nouns[] = Noun('toolbox', '', []);
// $nouns[] = Noun('top', '', []);
// $nouns[] = Noun('topic', '', []);
// $nouns[] = Noun('total', '', []);
// $nouns[] = Noun('trace', '', []);
// $nouns[] = Noun('track', '', []);
// $nouns[] = Noun('tracker', '', []);
// $nouns[] = Noun('tracking', '', []);
// $nouns[] = Noun('transaction', '', []);
// $nouns[] = Noun('transfer', '', []);
// $nouns[] = Noun('translator', '', []);
// $nouns[] = Noun('transport', '', []);
// $nouns[] = Noun('tree', '', []);
// $nouns[] = Noun('trigger', '', []);
// $nouns[] = Noun('true', '', []);
// $nouns[] = Noun('trust', '', []);
// $nouns[] = Noun('two', '', []);
// $nouns[] = Noun('tx', '', []);
// $nouns[] = Noun('type', s'', []);
// $nouns[] = Noun('unit', '', []);
// $nouns[] = Noun('update', '', []);
// $nouns[] = Noun('upper', '', []);
// $nouns[] = Noun('url', '', []);
// $nouns[] = Noun('usage', '', []);
// $nouns[] = Noun('use', '', []);
// $nouns[] = Noun('user', '', []);
// $nouns[] = Noun('using', '', []);
// $nouns[] = Noun('utc', '', []);
// $nouns[] = Noun('utility', '', []);
// $nouns[] = Noun('validation', '', []);
// $nouns[] = Noun('validator', '', []);
// $nouns[] = Noun('value', s'', []);
// $nouns[] = Noun('var', '', []);
// $nouns[] = Noun('variable', '', []);
// $nouns[] = Noun('vector', '', []);
// $nouns[] = Noun('verb', '', []);
// $nouns[] = Noun('version', '', []);
// $nouns[] = Noun('vertex', '', []);
// $nouns[] = Noun('vertical', '', []);
// $nouns[] = Noun('view', '', []);
// $nouns[] = Noun('viewport', '', []);
// $nouns[] = Noun('visibility', '', []);
// $nouns[] = Noun('visitor', '', []);
// $nouns[] = Noun('wa', '', []);
// $nouns[] = Noun('warning', '', []);
// $nouns[] = Noun('web', '', []);
// $nouns[] = Noun('weight', '', []);
// $nouns[] = Noun('whitehorse', '', []);
// $nouns[] = Noun('whitespace', '', []);
// $nouns[] = Noun('width', '', []);
// $nouns[] = Noun('wild card', '', []);
// $nouns[] = Noun('win', '', []);
// $nouns[] = Noun('window', '', []);
// $nouns[] = Noun('windows', '', []);
// $nouns[] = Noun('wizard', '', []);
// $nouns[] = Noun('word', '', []);
// $nouns[] = Noun('work', '', []);
// $nouns[] = Noun('workflow', '', []);
// $nouns[] = Noun('wrap', '', []);
// $nouns[] = Noun('wrapper', '', []);
// $nouns[] = Noun('writer', '', []);
// $nouns[] = Noun('zero', '', []);
// $nouns[] = Noun('zone', '', []);
// $nouns[] = Noun('zoom', '', []);

return $nouns;
